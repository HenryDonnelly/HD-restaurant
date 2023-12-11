<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');
        // $foods=Food::paginate(10);
        // eager loading
        $foods=Food::with('supplier')->get();

        return view('admin.foods.index')->with('foods',$foods);
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');
        return view('admin.foods.show')->with('food', $food);
    }
}
