<?php

namespace App\Repositories\DoorReading;

use App\Models\DoorReading;
use App\Repositories\BaseRepository;
use App\Repositories\DoorReading\DoorReadingRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;



class DoorReadingRepository extends BaseRepository implements DoorReadingRepositoryInterface
{

   /**
    * DoorReadingRepository constructor.
    *
    * @param DoorReading $model
    */
   public function __construct(DoorReading $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return DoorReading::all();    
   }

   public function validate(array $inputs)
   {
        Validator::make($inputs, [
            'is_open' => 'required|integer|in:1,0',
        ])->validate(); 
        return;   
   }

   public function create(array $inputs)
    {
        $this->validate($inputs);
        DoorReading::create([
            'is_open' => $inputs['is_open'],
        ]);
        return;
    }

    public function read()
    {
        return rand(0,1);
    }

    public function is_healthy()
    {
        $readings = DoorReading::where('created_at', '>=' ,Carbon::now()->subSecond(60)->toDateTimeString())->where(['is_open' => 1])->get();
        if($readings->count() >= 10){
            return false;
        }else{
            return true;
        };
    }

    public function update(Request $request,DoorReading $DoorReading){
        
    }

    public function delete(Request $request,DoorReading $DoorReading){
        
    }
}