<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\ReadTemperature::class,
        Commands\ReadDoor::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('SensorRead:Temperature')->everyMinute();
        // $schedule->command('SensorRead:Door')->everyMinute();
        
    }
    // hendle Schedule in shorter period of time

    protected function shortSchedule(\Spatie\ShortSchedule\ShortSchedule $shortSchedule)
    {
        
        
        // this command will run every 5 seconds
        $shortSchedule->command('SensorRead:Temperature')->everySeconds(5);
        $shortSchedule->command('SensorRead:Door')->everySeconds(5);
        
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
