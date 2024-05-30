<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        Log::info('Log Info!');
        Log::warning('Log Warning!');
        Log::error('Log Error!');
        Log::critical('Log Critical!');

        self::assertTrue(true);
    }

    public function testLogContext()
    {
        Log::info('Log context', ['user' => 'kiadi']);

        self::assertTrue(true);
    }

    public function testLogWithContext()
    {
        Log::withContext([
            'user' => 'with kiadi'
        ]);

        Log::info('Log with context 1');
        Log::info('Log with context 2');
        Log::info('Log with context 3');

        self::assertTrue(true);
    }
}
