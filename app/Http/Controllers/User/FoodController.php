<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('user');
        $foods=Food::paginate(10);
        return view('user.foods.index')->with('foods',$foods);
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        $user=Auth::user();
        $user->authorizeRoles('user');
        return view('user.foods.show')->with('food', $food);
    }
}
