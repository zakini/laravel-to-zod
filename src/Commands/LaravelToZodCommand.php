<?php

namespace Zakini\LaravelToZod\Commands;

use Illuminate\Console\Command;

class LaravelToZodCommand extends Command
{
    public $signature = 'laravel-to-zod';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
