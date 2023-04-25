<?php

namespace App\Http\Controllers;

use App\Models\fish;
use App\Models\fishbowl;
use App\Models\food;
use App\Models\kind;
use App\Models\sex;
use Illuminate\Http\Request;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishes = fish::all();
        return view('fish.index',compact('fishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexs = sex::all();
        $fishbowls = fishbowl::all(); 
        $kinds = kind::all(); 
        $foods = food::all();
        return view('fish.add', compact('sexs', 'fishbowls','kinds','foods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        fish::create($request->all());
        return redirect('fish')->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fish = fish::findOrFail($id);
        return view('fish.show', compact('fish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sexs = sex::all();
        $fishbowls = fishbowl::all(); 
        $kinds = kind::all(); 
        $foods = food::all();
        $fish = fish::findOrFail($id);
        return view('fish.edit', compact('fish','sexs', 'fishbowls','kinds','foods'));
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
        $fish = fish::findOrFail($id);
        $fish->delete();
        return redirect('fish')->with('danger','Eliminado correctamente ');
    }
}
