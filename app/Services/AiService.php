<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AiService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');

        if (!$this->apiKey) {
            throw new \Exception('OPENAI_API_KEY is missing in .env file');
        }
    }

    public function analyzeResume(string $resume, string $job): array
    {
        $prompt = "Compare the following resume with the job description.
Return ONLY a JSON object with:
- score (0-100)
- missing_skills (array)
- suggestions (array)

Resume:
$resume

Job:
$job";

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'You are an AI assistant that strictly returns valid JSON only.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ],
                ],
                'max_tokens' => 500,
                'temperature' => 0.2,
            ]);

            if (!$response->successful()) {
                Log::error('OpenAI API Error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                throw new \Exception('OpenAI API Error: ' . $response->status());
            }

            // Extract AI text content safely
            $text = $response->json('choices.0.message.content');

            // Define a safe fallback response to return when validation fails
            $fallback = [
                'score' => 0,
                'missing_skills' => [],
                'suggestions' => ['AI response was invalid. Please try again.']
            ];

            // If there's no content, log raw body and return fallback (no exception)
            if (!$text) {
                Log::error('Empty AI response', ['raw_response' => $response->body()]);
                return $fallback;
            }

            // Decode JSON string to array
            $data = json_decode($text, true);

            // Validate decoding succeeded and result is an associative array
            if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
                Log::error('Invalid JSON from AI', ['raw_response' => $text]);
                return $fallback;
            }

            // Validate exact keys
            $expectedKeys = ['score', 'missing_skills', 'suggestions'];
            $dataKeys = array_keys($data);

            // If keys differ in count or names, log and return fallback
            sort($expectedKeys);
            sort($dataKeys);
            if ($expectedKeys !== $dataKeys) {
                Log::error('AI response missing or extra keys', ['raw_response' => $text, 'found_keys' => $dataKeys]);
                return $fallback;
            }

            // Validate `score` is integer-like and within 0-100
            $score = $data['score'];
            if (!(is_int($score) || (is_numeric($score) && intval($score) == $score))) {
                Log::error('AI response score invalid', ['raw_response' => $text, 'score' => $score]);
                return $fallback;
            }
            $score = (int) $score;
            if ($score < 0 || $score > 100) {
                Log::error('AI response score out of range', ['raw_response' => $text, 'score' => $score]);
                return $fallback;
            }

            // Validate `missing_skills` is an array of strings
            if (!is_array($data['missing_skills'])) {
                Log::error('AI response missing_skills invalid type', ['raw_response' => $text]);
                return $fallback;
            }
            foreach ($data['missing_skills'] as $item) {
                if (!is_string($item)) {
                    Log::error('AI response missing_skills contains non-string', ['raw_response' => $text]);
                    return $fallback;
                }
            }

            // Validate `suggestions` is an array of strings
            if (!is_array($data['suggestions'])) {
                Log::error('AI response suggestions invalid type', ['raw_response' => $text]);
                return $fallback;
            }
            foreach ($data['suggestions'] as $item) {
                if (!is_string($item)) {
                    Log::error('AI response suggestions contains non-string', ['raw_response' => $text]);
                    return $fallback;
                }
            }

            // At this point validation passed — return sanitized values
            return [
                'score' => $score,
                'missing_skills' => array_values($data['missing_skills']),
                'suggestions' => array_values($data['suggestions'])
            ];

        } catch (\Exception $e) {
            Log::error('AI Service Exception', ['message' => $e->getMessage()]);
            throw new \Exception('AI Service Error: ' . $e->getMessage());
        }
    }
}
