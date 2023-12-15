<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
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
        $restaurants=Restaurant::with('foods')->get();

        return view('admin.restaurants.index')->with('restaurants',$restaurants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        $restaurants = Restaurant::all();
        return view('admin.restaurants.create')->with('restaurants',$restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'bio' => 'required',
        ]);

        Restaurant::create([
            'name' => $request->name,
            'address' => $request->address,
            'bio' => $request->bio,
        ]);

        return redirect()->route('admin.foods.index')->with('success','food stored');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
   {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        if (!Auth::id()){
            return abort(403);
        }

        $foods=$restaurant->foods;

        return view('admin.restaurants.show', compact('restaurant', 'foods'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
      //  $restaurant = restaurant::get($restaurant->id);
    //   $user=Auth::user();
    //   $user->authorizeRoles('admin');
    //   $restaurants=restaurant::all();
    //     return view('admin.restaurants.edit')->with('restaurant', $restaurant,'restaurants',$restaurants);
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        $restaurants = restaurant::all();
        return view('admin.restaurants.edit')->with('restaurants',$restaurants);
    }

    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, Supplier $supplier)
     {
         $request->validate([
             'name' => 'required',
             'address' => 'required',
             'bio' => 'required',
         ]);

         $supplier->update([
             'name' => $request->input('name'),
             'address' => $request->input('address'),
             'bio' => $request->input('bio'),
         ]);

         return redirect()->route('admin.foods.index')->with('success', 'Food successfully updated');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        $user=Auth::user();
      $user->authorizeRoles('admin');
        $restaurant->delete();
        return view('admin.restaurants.index')->with('success','restaurant deleted successfully');
    }
}
