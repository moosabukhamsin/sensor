<?php

namespace App\Repositories\TemperatureReading;

use App\Models\TemperatureReading;
use App\Repositories\BaseRepository;
use App\Repositories\TemperatureReading\TemperatureReadingRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class TemperatureReadingRepository extends BaseRepository implements TemperatureReadingRepositoryInterface
{

   /**
    * TemperatureReadingRepository constructor.
    *
    * @param TemperatureReading $model
    */
   public function __construct(TemperatureReading $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return TemperatureReading::all();    
   }

   public function validate(array $inputs)
   {
        Validator::make($inputs, [
            'temperature' => 'required|integer',
        ])->validate(); 
        return;   
   }

   public function create(array $inputs)
    {
        $this->validate($inputs);
        $TemperatureReading = TemperatureReading::create([
            'temperature' => $inputs['temperature'],
        ]);
        return $TemperatureReading;
    }
    /**
    * Read from remote sensor,.
    *
    * @param TemperatureReading $model
    */
    public function read()
    {
        return rand(-24,16);
    }

    public function is_healthy(TemperatureReading $TemperatureReading)
    {
        if($TemperatureReading->temperature >= -23 && $TemperatureReading->temperature <= 15){
            return true;
        }else{
            return false;
        };
    }

    public function update(Request $request,TemperatureReading $TemperatureReading){
        
    }

    public function delete(Request $request,TemperatureReading $TemperatureReading){
        
    }
}