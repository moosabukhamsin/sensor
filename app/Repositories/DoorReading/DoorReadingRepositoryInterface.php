<?php
namespace App\Repositories\DoorReading;

use App\Models\DoorReading;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

interface DoorReadingRepositoryInterface
{
   public function all(): Collection;
   
   public function validate(array $attributes);
   
   public function create(array $attributes);

   public function update(Request $request,DoorReading $DoorReading);

   public function read();

   public function delete(Request $request,DoorReading $DoorReading);
   
   
}