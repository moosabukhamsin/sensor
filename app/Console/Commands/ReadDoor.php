<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use App\Repositories\DoorReading\DoorReadingRepositoryInterface;
use App\Notifications\DoorOpen;

class ReadDoor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SensorRead:Door';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'read the door sensor and save it to database and send warning if door is open';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    
     /**
     * @var ReadDoorRepo
     */
    private $ReadDoorRepo;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(DoorReadingRepositoryInterface $DoorReadingRepository)
    {
        parent::__construct();
        $this->ReadDoorRepo = $DoorReadingRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $door_status = $this->ReadDoorRepo->read();
        $this->ReadDoorRepo->create(['is_open'=> $door_status]);
        if( !$this->ReadDoorRepo->is_healthy() ){
            Notification::route('slack', 'https://hooks.slack.com/services/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')
                ->notify(new DoorOpen());
            return 0;
        }
        return 0;
    }
}
