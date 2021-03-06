<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function AddCategory(Request $request){
        $categories = new Categories();
        $categories->category_name = $request["category_name"];
        $categories->save();
        return back()->with("success", "Category Added!");
    }
    public function UpdateCategory(Request $request){
        Categories::where("id", "=", $request->id)->update(["category_name" => $request->category_name]);
        echo "Category Updated!";
    }
    public function RemoveCategory(Request $request){
        Categories::where("id", "=", $request->id)->delete();
        echo "Category Deleted!";
    }
}
