<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kind;

class KindController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        //Definimos nuestra vista
        $kinds = kind::all();
        return view('kind.index', compact('kinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kind.add');
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
        kind::create($input);
        return redirect('kind')->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kinds = kind::find($id);
        return view('kind.show')->with('kinds',$kinds);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kinds = kind::find($id);
        return view('kind.edit')->with('kinds', $kinds);
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
        $kinds = kind::findOrFail($id);
        $input=$request->all();
        $kinds->update($input);
        return redirect('kind')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kinds = kind::findOrFail($id);
        $kinds->delete();
        return redirect('kind')->with('danger','Se elimino correctamente');
    }
}
