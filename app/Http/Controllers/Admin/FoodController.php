<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Supplier;
use App\Models\Restaurant;
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
        $user->authorizeRoles('admin');
        // $foods=Food::paginate(10);
        // eager loading
        $foods=Food::with('supplier')->get();

        return view('admin.foods.index')->with('foods',$foods);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        $suppliers = Supplier::all();
        $restaurants=Restaurant::all();
        return view('admin.foods.create')->with('suppliers',$suppliers)->with('restaurants',$restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'supplier_id' => 'required',
            'best_before' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,bmp,jpg,gif|max:2048',
            // 'restaurants'=>['required','exists:restaurants, id']
        ]);

        $food_picture_name = null;

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() . '.' . $picture->extension();
            $picture->storeAs('public/foods', $pictureName);
            $food_picture_name = 'storage/foods/' . $pictureName;
        }

        $food = Food::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'best_before' => $request->best_before,
            'supplier_id' => $request->supplier_id,
            'picture' => $food_picture_name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
// restaurants are not being passed the correct info

        // $food->restaurants()->attach($request->restaurants);

        return to_route('admin.foods.index')->with('Success', "Yay");
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
      //  $food = Food::get($food->id);
    //   $user=Auth::user();
    //   $user->authorizeRoles('admin');
    //   $suppliers=Supplier::all();
    //     return view('admin.foods.edit')->with('food', $food,'suppliers',$suppliers);
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        $suppliers = Supplier::all();
        return view('admin.foods.edit', compact('food','suppliers'));
    }

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
             'suppliers'=>'required',
         ]);


         if ($request->hasFile('picture')) {
             $picture = $request->file('picture');
             $pictureName = time() . '.' . $picture->extension();
             $picture->storeAs('public/foods', $pictureName);
             $food_picture_name = 'storage/foods/' . $pictureName;
         }

         $food->update([
             'name' => $request->name,
             'category' => $request->category,
             'description' => $request->description,
             'price' => $request->price,
             'best_before' => $request->best_before,
             'suppliers'=> $request->supplier_id,
             'picture'=>$request->picture,
             'suppliers'=>$request->supplier_id,
             'created_at'=>now(),
             'updated_at'=>now()
         ]);

         return to_route('admin.foods.show',['supplier' => $food->id])->with('success', 'Food successfully updated');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');
        $food->delete();
        return view('admin.foods.index')->with('success','food deleted successfully');
    }
}
