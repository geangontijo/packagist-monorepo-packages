<?php

namespace GeanGontijo\LaravelDummy;

use GeanGontijo\LaravelDummy\Commands\DummyCommand;
use Illuminate\Support\ServiceProvider;

class DummyCommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DummyCommand::class,
            ]);
        }
    }
}