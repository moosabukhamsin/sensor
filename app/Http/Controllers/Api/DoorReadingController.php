<?php

namespace App\Http\Controllers\Api;

use App\Models\DoorReading;
use Illuminate\Http\Request;
use App\Repositories\DoorReading\DoorReadingRepositoryInterface;
use Response;



class DoorReadingController extends ApiController
{
    private $DoorReadingRepository;

    public function __construct(DoorReadingRepositoryInterface $DoorReadingRepository)
    {
        $this->DoorReadingRepository = $DoorReadingRepository;
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
        try {
            $this->DoorReadingRepository->create($request->all());
            return Response::json([
                'msg' => 'success'
            ], 201);
        }
        catch (Exception $exception)
        {
            return Response::json([
                'msg' => 'fail'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoorReading  $doorReading
     * @return \Illuminate\Http\Response
     */
    public function show(DoorReading $doorReading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoorReading  $doorReading
     * @return \Illuminate\Http\Response
     */
    public function edit(DoorReading $doorReading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoorReading  $doorReading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoorReading $doorReading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoorReading  $doorReading
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoorReading $doorReading)
    {
        //
    }
}
