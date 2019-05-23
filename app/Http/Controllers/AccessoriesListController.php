<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Category;
use App\Quantity;
use Illuminate\Http\Request;

class AccessoriesListController extends Controller
{
    public function index(){
        $categories = Category::all();
        $quantities = Quantity::all();
        return view('admin.accessories.accessories-list', [
            'categories'=>$categories,
            'quantities'=>$quantities
        ]);
    }
    public function store(Request $request){
        $accessories = new Accessories();
        $accessories->accessories_name = $request->accessories_name;
        $accessories->accessories_status = $request->accessories_status;
        $accessories->category_id = $request->category_id;
        $accessories->quantity_id = $request->quantity_id;
        $accessories->save();

        return 'Success';

    }
}
