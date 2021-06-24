<?php

namespace App\Http\Controllers;

use App\Models\TemperatureReading;
use Illuminate\Http\Request;
use App\Repositories\TemperatureReading\TemperatureReadingRepositoryInterface;

class TemperatureReadingController extends ApiController
{
    private $TemperatureReadingRepository;

    public function __construct(TemperatureReadingRepositoryInterface $TemperatureReadingRepository)
    {
        $this->TemperatureReadingRepository = $TemperatureReadingRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemperatureReading  $temperatureReading
     * @return \Illuminate\Http\Response
     */
    public function show(TemperatureReading $temperatureReading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemperatureReading  $temperatureReading
     * @return \Illuminate\Http\Response
     */
    public function edit(TemperatureReading $temperatureReading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TemperatureReading  $temperatureReading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TemperatureReading $temperatureReading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemperatureReading  $temperatureReading
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemperatureReading $temperatureReading)
    {
        //
    }
}
