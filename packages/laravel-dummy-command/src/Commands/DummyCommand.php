<?php

namespace GeanGontijo\LaravelDummy\Commands;

use Illuminate\Console\Command;

class DummyCommand extends Command
{
    protected $signature = 'dummy:command';

    protected $description = 'This is a dummy command';

    public function handle(): void
    {
        $this->info('Tecnologia avançada v8');
    }

}
