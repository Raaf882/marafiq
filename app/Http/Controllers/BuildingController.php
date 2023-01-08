<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;


class BuildingController extends Controller
{
   




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function showBuilding()
    {
        $building= Building::all();
        return view ('show_building',['buildings'=>$building]);
    }
 
    
    public function index()
    {
        
        return view ('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('cms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
      $building = new Building();

      $building->name=$request->name;
      $building->description=$request->description;
      $building->desc_details=$request->desc_details;
      $building->price=$request->price;
      $building->save();
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        $building = Building::where('id', $building)->first();
        return view('building-details', ['building' => $building]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        //
    }
}
