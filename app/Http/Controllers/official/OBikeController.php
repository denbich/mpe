<?php

namespace App\Http\Controllers\official;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bike_Station;

class OBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('official.bike.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('official.bike.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('official.bike.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('official.bike.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bike_station::where('id', $id)->firstOrFail()->destroy();
        return redirect()->route('o.bikes.index')->with(['deleted_bike' => true]);
    }
}