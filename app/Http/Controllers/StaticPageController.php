<?php

namespace App\Http\Controllers;

use App\Models\DoorReading;
use App\Models\TemperatureReading;
use Illuminate\Http\Request;
use Response;

class StaticPageController extends Controller
{
    
    /**
     * handling home page
     */
    public function home()
    {
        //
    }

     /**
     * return data needed for home page
     */
    public function get_lastest_data()
    {
        $last_temp_red = TemperatureReading::latest()->first();
        $last_door_read = DoorReading::latest()->first();
        return Response::json([
            'last_temp_read' => $last_temp_red->temperature,
            'last_door_read' => $last_door_read->is_open,
        ], 201);
    }
}
