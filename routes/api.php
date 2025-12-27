<?php

use App\Http\Controllers\AiMatchController;

Route::post('/analyze', [AiMatchController::class, 'analyze']);
