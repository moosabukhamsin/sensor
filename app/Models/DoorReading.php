<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorReading extends Model
{
    protected $fillable = ['is_open'];
    use HasFactory;
}
