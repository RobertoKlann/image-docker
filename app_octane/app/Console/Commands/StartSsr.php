<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class StartSsr extends Command
{
    protected $signature = 'inertia:start-ssr';
    protected $description = 'Start the Inertia SSR server';

    public function handle()
    {
        $process = new Process(['node', 'bootstrap/ssr/ssr.js']);

        $process->setTimeout(null);
        
        $process->run(function ($type, $buffer) {
            echo $buffer;
        });
    }
}