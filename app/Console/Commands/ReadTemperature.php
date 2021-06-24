<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use App\Repositories\TemperatureReading\TemperatureReadingRepositoryInterface;
use App\Notifications\UnhealthyTemp;
use App\Models\TemperatureReading;

class ReadTemperature extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SensorRead:Temperature';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'read the temperature sensor and save it to database and send warning if the temperature is below -20 or above 15 degree';

     /**
     * @var ReadTempRepo
     */
    private $ReadTempRepo;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(TemperatureReadingRepositoryInterface $TemperatureReadingRepository)
    {
        parent::__construct();
        $this->ReadTempRepo = $TemperatureReadingRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $Temperature = $this->ReadTempRepo->read();
        $TemperatureReading = $this->ReadTempRepo->create(['temperature'=> $Temperature]);
        if( !$this->ReadTempRepo->is_healthy($TemperatureReading) ){
            Notification::route('slack', 'https://hooks.slack.com/services/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')
            ->notify(new UnhealthyTemp());
            return 0;
        }
        return 0;
    }
}
