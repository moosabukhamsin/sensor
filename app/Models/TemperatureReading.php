<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemperatureReading extends Model
{
    protected $fillable = ['temperature'];
    use HasFactory;
}
