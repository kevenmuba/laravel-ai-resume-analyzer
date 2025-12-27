<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AiService;

class AiMatchController extends Controller
{
    protected $aiService;

    public function __construct(AiService $aiService)
    {
        $this->aiService = $aiService;
    }

    public function analyze(Request $request)
    {
        $request->validate([
            'resume' => 'required|string|min:20',
            'job' => 'required|string|min:20',
        ]);

        try {
            $result = $this->aiService->analyzeResume($request->resume, $request->job);
            return response()->json($result);
        } catch (\Exception $e) {
            // Return detailed error to Postman
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
