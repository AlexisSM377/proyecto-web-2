<?php

namespace App\Http\Controllers;

use App\Models\diet;
use App\Models\food;
use App\Models\product;
use Illuminate\Http\Request;

class FoodController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = food::all();

        return view('food.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diets = diet::all();
        $products = product::all(); 
        return view('food.add', compact('diets', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        food::create($request->all());
        return redirect('food')->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = food::findOrFail($id);
        return view('food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = food::findOrFail($id);
        $diets = diet::all();
        $products = product::all(); 
        return view('food.edit', compact('food','diets', 'products'));
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
        $food = food::findOrFail($id);
        $food->update($request->all());
        return redirect('food')->with('message','Se ha creado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = food::findOrFail($id);
        $food->delete();
        return redirect('food')->with('danger','Eliminado correctamente ');
    }
}
