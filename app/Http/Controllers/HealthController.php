<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;


class HealthController extends Controller
{
    public function index(): JsonResponse
    {
        Log::info('Health check accessed');

        return response()->json([
            'status' => 'ok',
            'app' => 'laravel-cloud-project',
            'time' => now()
        ]);
    }
}
