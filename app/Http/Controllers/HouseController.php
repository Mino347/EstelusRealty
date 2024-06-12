<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('houses.index' , [
            'houses' => House::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHouseRequest $request)
    {
        //get the validated data
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['Title']);


        House::create($validated);

        return redirect()->route('houses')
            ->with('flash.banner', 'House created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return view('houses.show', [
            'house' => $house,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        return view('houses.edit', [
            'house' => $house,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHouseRequest $request, House $house)
    {
        //get the validated data
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['Title']);


        $house->update($validated);

        return redirect()->route('houses')
            ->with('flash.banner', 'House updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $model = $house;

        $house->delete();

        //set the banner status to danger
        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('houses')
            ->with('flash.banner', $model->title ,  'House deleted successfully');

    }
}
