<?php

namespace App\Http\Controllers;

use App\Quantity;
use Illuminate\Http\Request;

class QuantityController extends Controller
{
    public function index(){
        $quantities = Quantity::all();
        return view('admin.quantity.view-quantity', ['quantities'=>$quantities]);
    }
    public function store(Request $request){
        $quantity = new Quantity();
        $quantity->quantity_name = $request->quantity_name;
        $quantity->save();

        return redirect('/quantity')->with('message', 'Insert Successfully');
    }
    public function edit($id){
        $quantity = Quantity::find($id);
        return view('admin.quantity.edit-quantity', ['quantity'=>$quantity]);
    }
    public function update(Request $request){
        $quantity = Quantity::find($request->quantity_id);
        $quantity->quantity_name = $request->quantity_name;
        $quantity->save();

        return redirect('/quantity')->with('message', 'Update Successfully');
    }
    public function delete($id){
        $quantity = Quantity::find($id);
        $quantity->delete();

        return redirect('/quantity')->with('message', 'Delete Successfully');
    }
}
