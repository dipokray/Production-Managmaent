<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AccessoriesCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.accessories-category', ['categories'=>$categories]);
    }
    public function create(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        return redirect('/accessories-category')->with('message', 'Insert Category Name');

    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit-category', ['category'=>$category]);
    }
    public function update(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect('/accessories-category')->with('message', 'Category Updated Successfully');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect('/accessories-category')->with('message', 'Category Info Delete Successfully');
    }

//    public function viewQuantity(){
//        return view('admin.category.view-quantity');
//    }
}
