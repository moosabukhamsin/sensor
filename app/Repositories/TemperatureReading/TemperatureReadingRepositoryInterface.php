<?php
namespace App\Repositories\TemperatureReading;

use App\Models\TemperatureReading;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;  

interface TemperatureReadingRepositoryInterface
{
   public function all(): Collection;
   
   public function validate(array $attributes);
   
   public function create(array $attributes);

   public function update(Request $request,TemperatureReading $TemperatureReading);
   
   public function read();

   public function delete(Request $request,TemperatureReading $TemperatureReading);
   
   
}