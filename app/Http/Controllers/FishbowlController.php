<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fishbowl;
use App\Models\user;
use App\Models\spec;

class FishbowlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishbowls = fishbowl::all();
        return view('fishbowl.index', compact('fishbowls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::all('id','name');
        $specs = spec::all('id','water');
        return view('fishbowl.add', compact('users','specs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        fishbowl::create($input);
        return redirect('fishbowl')->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fishbowls = fishbowl::find($id);
        return view('fishbowl.show')->with('fishbowls',$fishbowls);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = user::all('id','name');
        $specs = spec::all('id','water');

        $fishbowls = fishbowl::find($id);
        return view('fishbowl.edit',compact('users','specs'))->with('fishbowls', $fishbowls);
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
        $fishbowls = fishbowl::findOrFail($id);
        $input=$request->all();
        $fishbowls->update($input);
        return redirect('fishbowl')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fishbowls = fishbowl::findOrFail($id);
        $fishbowls->delete();
        return redirect('fishbowl')->with('danger','correctamente ');
    }
}
