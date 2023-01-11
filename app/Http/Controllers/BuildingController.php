<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Reservation;


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

    public function showReservation(Building $building){

        $building = Building::where('id', '1')->first();
        //$building = Building::all()->where('id')->pluck('price')->first();
        return view('reservation',['building' => $building]);

    }

    public function reservation(Request $request){
                // dd($request->all());


        $reservation = new reservation();
        $reservation->event_type=$request->event_type;
        $reservation->description=$request->description;
        $reservation->desc_details=$request->desc_details;
        $reservation->geust_NO=$request->geust_NO;
        $reservation->pay_method=$request->pay_method;

        $reservation->save();
        return redirect('show_building');
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
    public function saveImage(Request $request)
    {

        // dd($request->all());
      $images = new Image();

      
      $images->image=$request->image;
      $images->img=$request->img;





      $images->save();
      return redirect()->back();
    }

    public function store(Request $request)
    {

        // dd($request->all());
        if($request->hasFile('image'))
        {
            $singleImg = $request->image->hashName();
            $request->image->move(public_path('img'), $singleImg);
        }

  
      $building = new Building();

      $building->name=$request->name;
      $building->description=$request->description;
      $building->desc_details=$request->desc_details;
      $building->price=$request->price;
      $building->image=$singleImg;

      
      $building->save();

      if($request->hasFile('img'))
      {
          foreach($request->file('img') as $file)
          {
              $name = $file->hashName();
              $file->move(public_path('img'), $name);

              $image = new Image();
              $image->building_id= $building->id;
              $image->imageFile= $name;
              $image->save();
 
          }
      }

      return redirect('show_building');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show($building)
    {
        $building = Building::with('images')->where('id', $building)->first();
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
