<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all ingredients 
        $ingredients = Ingredient::all();

        // pass data to view
        return view('ingredients.index', [
            'ingredients' => $ingredients,
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredients.create');
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientRequest $request)
    {
        
        $request->validate([
            'name' => 'required'
        ]);

        Ingredient::create($request->all());
        // $ingredient = new Ingredient();
        // $ingredient->name = $request->name;
        // $ingredient->save();

        return redirect()->route('ingredients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngredientRequest $request, Ingredient $ingredient)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $ingredient->update($request->all());
        
        return redirect()->route('ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        
        return redirect()->route('ingredients.index');
    }
}
