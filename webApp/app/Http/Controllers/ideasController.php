<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class ideasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ideas = Ideas::all();

        return view('ideasList', ['Ideas' => $ideas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('boiteidée');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Ideas::create([
            'nom' => $request -> nom,
            'email' => $request -> email,
            'sujet' => $request -> sujet,
            'message' => $request -> message
        ]);
        return redirect('/');
    }
 
    /**
     * Sign into an existing session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checks(Request $request){
   
        $ideas = Ideas::find($request);
        if($ideas -> pseudo == $request -> pseudo){
            //echo "CONNECTION SUCCESS";
            echo $request -> Ideasname;

        } else{
            return "CONNECTION FAILED";
        }
    }


    public function check(Request $request, $id){
        $ideas = Ideas::find($id);
        
        echo $request -> Ideasname;

    } 
}
