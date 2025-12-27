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

            $text = $response->json('choices.0.message.content');

            if (!$text) {
                throw new \Exception('No content returned from AI');
            }

            $data = json_decode($text, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid JSON from AI', ['raw_response' => $text]);
                throw new \Exception('Invalid JSON returned from AI');
            }

            return $data;

        } catch (\Exception $e) {
            Log::error('AI Service Exception', ['message' => $e->getMessage()]);
            throw new \Exception('AI Service Error: ' . $e->getMessage());
        }
    }
}
