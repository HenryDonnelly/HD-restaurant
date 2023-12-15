<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Supplier;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $suppliers=Supplier::with('foods')->get();

        return view('admin.suppliers.index')->with('suppliers',$suppliers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        $suppliers = Supplier::all();
        return view('admin.suppliers.create')->with('suppliers',$suppliers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
        ]);

        Supplier::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
        ]);

        return redirect()->route('admin.foods.index')->with('success','food stored');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
   {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        if (!Auth::id()){
            return abort(403);
        }

        $foods=$supplier->foods;

        return view('admin.suppliers.show', compact('supplier', 'foods'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
      //  $supplier = supplier::get($supplier->id);
    //   $user=Auth::user();
    //   $user->authorizeRoles('admin');
    //   $suppliers=Supplier::all();
    //     return view('admin.suppliers.edit')->with('supplier', $supplier,'suppliers',$suppliers);
    {
        $user=Auth::user();
        $user->authorizeRoles('admin');

        $suppliers = Supplier::all();
        return view('admin.suppliers.edit')->with('suppliers',$suppliers);
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
             'phone_no' => 'required',
         ]);

         $supplier->update([
             'name' => $request->input('name'),
             'address' => $request->input('address'),
             'phone_no' => $request->input('phone_no'),
         ]);

         return redirect()->route('admin.foods.index')->with('success', 'Food successfully updated');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $user=Auth::user();
      $user->authorizeRoles('admin');
        $supplier->delete();
        return view('admin.suppliers.index')->with('success','supplier deleted successfully');
    }
}
