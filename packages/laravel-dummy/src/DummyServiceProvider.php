<?php

namespace GeanGontijo\LaravelDummy;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class DummyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Log::emergency('BOOT - Tecnologia avançada v1');
    }
}