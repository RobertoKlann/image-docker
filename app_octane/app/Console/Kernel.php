<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define os comandos Artisan personalizados para a aplicação.
     *
     * @var array
     */
    protected $commands = [
        Commands\StartSsr::class,
    ];

    /**
     * Define o agendamento de tarefas.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Exemplo de agendamento: $schedule->command('inspire')->hourly();
    }

    /**
     * Registra comandos para a aplicação.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
