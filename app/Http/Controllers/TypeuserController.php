<?php

namespace App\Http\Controllers;

use App\Models\typeuser;
use Illuminate\Http\Request;

class TypeuserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Definimos nuestra vista
        $typeusers = typeuser::all();
        return view('typeuser.index', compact('typeusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeuser.add');
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
        //return $input;
        typeuser::create($input);
        return redirect('typeuser')->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeusers = typeuser::find($id);
        return view('typeuser.show')->with('typeusers',$typeusers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeusers = typeuser::find($id);
        return view('typeuser.edit')->with('typeusers', $typeusers);
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
        $typeusers = typeuser::findOrFail($id);
        $input=$request->all();
        $typeusers->update($input);
        return redirect('typeuser')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeusers = typeuser::findOrFail($id);
        $typeusers->delete();
        return redirect('typeuser')->with('danger','Se elimino correctamente');
    }
    

}
