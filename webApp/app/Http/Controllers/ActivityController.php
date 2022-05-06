<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $activities = Activity::all();

        return view('activityList', ['Activity' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('activityAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Activity::create([
            'name'=> $request -> name,
            'description' => $request -> description,
            'image' => $request -> image,
            'dates' => $request -> dates,
            'status' => $request -> status,
            'price' => $request->price,
            'is_repeating' => $request->is_repeating
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $Activity = Activity::find($id);
        return view('activityShow', ['Activity' => $Activity]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $Activity = Activity::find($id);
        return view('activityEdit', ['Activity' => $Activity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $Activity = Activity::find($id);
        $Activity -> name = $request -> name;
        $Activity -> description = $request -> description;
        $Activity -> image = $request -> image;
        $Activity -> dates = $request -> dates;
        $Activity -> status = $request -> status;
        $Activity -> price = $request->price;
        $Activity->is_repeating = $request->is_repeating;


        $Activity -> save();
        return redirect('/');
    } 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id){
        $Activity = Activity::find($id);
        $Activity -> delete();
        return redirect('/');
    }
 
}
