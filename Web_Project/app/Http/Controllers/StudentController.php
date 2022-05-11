<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $students = Student::all();

        return view('studentList', ['Student' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('studentSignUp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Student::create([
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
        $Student = Student::find($id);
        return view('studentShow', ['Student' => $Student]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $Student = Student::find($id);
        return view('studentEdit', ['Student' => $Student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $Student = Student::find($id);
        $Student -> firstname = $request -> firstname;
        $Student -> secondname = $request -> secondname;
        $Student -> centre = $request -> centre;
        $Student -> email = $request -> email;
        $Student -> password = $request -> password;

        $Student -> save();
        return redirect('/');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id){
        $Student = Student::find($id);
        $Student -> delete();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signIn(){
        return view('studentSignIn');
    }   
    /**
     * Sign into an existing session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checks(Request $request){
   
        $Student = Student::find($request);
        if($Student -> pseudo == $request -> pseudo){
            //echo "CONNECTION SUCCESS";
            echo $request -> Studentname;

        } else{
            return "CONNECTION FAILED";
        }
    }


    public function check(Request $request, $id){
        $Student = Student::find($id);
        
        echo $request -> Studentname;

    } 
}
