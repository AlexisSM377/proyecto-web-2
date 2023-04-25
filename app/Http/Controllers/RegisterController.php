<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fishbowl;
use App\Models\register;

class RegisterController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = register::all();
        return view('register.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fishbowls = fishbowl::all('id','name');
        return view('register.add', compact('fishbowls'));
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
        register::create($input);
        return redirect('register')->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registers = register::find($id);
        return view('register.show')->with('registers',$registers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fishbowls = fishbowl::all('id','name');
        $registers = register::find($id);
        return view('register.edit',compact('fishbowls'))->with('registers', $registers);
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
        $registers = register::findOrFail($id);
        $input=$request->all();
        $registers->update($input);
        return redirect('register')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registers = register::findOrFail($id);
        $registers->delete();
        return redirect('register')->with('danger','correctamente ');
    }
    //nota para mi mismo, solo faltan las vistas y todo lo demas de kinds :p
}
