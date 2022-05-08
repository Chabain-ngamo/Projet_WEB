<?php

namespace App\Http\Controllers;

use App\Models\Cesi;
use Illuminate\Http\Request;

class CesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $cesis = Cesi::all();

        return view('cesiList', ['Cesi' => $cesis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Cesi::create([
            'firstName' => $request -> firstName,
            'secondName' => $request -> secondName,
            'centre' => $request -> centre,
            'email' => $request -> email,
            'password' => $request -> password
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
        $Cesi = Cesi::find($id);
        return view('cesiShow', ['Cesi' => $Cesi]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $Cesi = Cesi::find($id);
        return view('cesiEdit', ['Cesi' => $Cesi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $Cesi = Cesi::find($id);
        $Cesi -> firstname = $request -> firstname;
        $Cesi -> secondname = $request -> secondname;
        $Cesi -> centre = $request -> centre;
        $Cesi -> email = $request -> email;
        $Cesi -> password = $request -> password;

        $Cesi -> save();
        return redirect('/');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id){
        $Cesi = Cesi::find($id);
        $Cesi -> delete();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signIn(){
        return view('cesiSignIn');
    }   
    /**
     * Sign into an existing session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checks(Request $request){
   
        $Cesi = Cesi::find($request);
        if($Cesi -> pseudo == $request -> pseudo){
            //echo "CONNECTION SUCCESS";
            echo $request -> Cesiname;

        } else{
            return "CONNECTION FAILED";
        }
    }


    public function check(Request $request, $id){
        $Cesi = Cesi::find($id);
        
        echo $request -> Cesiname;

    } 
}
