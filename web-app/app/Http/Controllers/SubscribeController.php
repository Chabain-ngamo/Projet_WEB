<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscribeController extends Controller
{
    private $store_rule = [
        'user_id' => 'required|integer|exists:users,id',
        'activity_id' => 'required|integer|exists:activities,id'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //validate the input of user
        $validator = Validator::make($request->query(), [
            'eid' => 'required|integer|exists:events,id',
            'uid' => 'integer|exists:users,id'
        ]);
        if ($v->fails()){
            return response()->json(['errors' => $v->errors()->toArray()], 400);
        }
        //creating a collection instance of the request
        $query= collect($request->query());
        $subcribes = Subscribe::where ('event_id', $query->get('eid'));
        //Only query that has at least one uid
        if ($query->has('uid')){
            $subcribes = $subscribes->where('user_id', $query->get('uid'));
        }
        //convert the variable subcribe into array after convert it in JSON.
        return response()->json($subcribes->get()->toArray());
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
        //
        $v = Validator::make($request->all(), $this->store_rule);
        if ($v->fails()) {
            return response()->json(['errors' => $v->errors()->toArray()], 400);
        }
        $subscribe = Subscribe::create($request->all());
        return response()->json($subscribe->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $subscribe= Subscribe::find($id);
        $subscribe->delete();
        return response()->json($subscribe->toArray());
    }
}
