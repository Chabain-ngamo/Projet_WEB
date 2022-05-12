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

        return view('boiteidée', ['ideas' => $ideas]);
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
            'sujet' => $request -> sujet,
            'description' => $request -> description,
            'image' => $request -> image
        ]);
        $name =$request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('uploads', $name);

        return redirect("/boiteidée");
        
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

    public function remove($id){
        $Cesi = Ideas::find($id);
        $Cesi -> delete();
        return redirect('/');
    }

    
    //Creates uploaded file
    public function fileCreate()
    {
        return view('imageupload');
    }

    public function fileStore(Request $request)
    {
        $request->file('image')->store("uploads");

        return redirect('/boiteidée');
        
    }
}
