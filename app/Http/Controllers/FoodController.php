<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods=Food::all();
        return view('foods.index', compact ('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foods.create');
        return to_route('foods.index', $food)->with('success', 'Food successfully created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category'=> 'required',
            'description' => 'required',
            'price' => 'required',
            'best_before' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,bmp,jpg,gif|max:2048',
        ]);

        Food::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'best_before' => $request->best_before,
            'picture' => $picture_name,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        return to_route('foods.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return view('foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
      //  $food = Food::get($food->id);
        return view('foods.edit')->with('food', $food);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'best_before' => 'required',
             'picture' => 'required',
        ]);
        // if($request->hasFile('picture')){
        //     $picture=$request->file('picture');
        //     $pictureName=time() . "." . $picture->extension();
        //     $picture->storeAs('public/foods',$pictureName);
        //     $food_picture_name='storage/foods/' . $pictureName;
        // }
        $food->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'best_before' => $request->best_before,
            'picture' => $request->picture,
        ]);

        return to_route('foods.show', $food)->with('success', 'Food successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return to_route('foods.index')->with('success','food deleted successfully');
    }
}
