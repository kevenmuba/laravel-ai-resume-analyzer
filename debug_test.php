<?php
try {
    $service = app(\App\Services\AiService::class);
    $result = $service->analyzeResume('I am a Laravel developer.', 'Looking for Laravel dev.');
    echo json_encode($result, JSON_PRETTY_PRINT);
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "TRACE: " . $e->getTraceAsString();
}
