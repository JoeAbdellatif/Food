<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('Admin/Categories',compact('categories'));
    }

    public function Add(Request $request){
        $cat = new Category();
        $cat->CategoryName = $request->Name;

        if ($request->hasfile('Image')) {
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time()."." .$extension;
            $destinationPath = 'uploads/Category/';
            $file->move($destinationPath, $filename);
            $cat->Image=$filename;
            }
        $cat->save();

        return redirect()->back()->with('CatAdded','Category inserted Successfully!');
    }

    public function Delete(Request $request){
        $cat = Category::where('id','=',$request->Id)->first();
        $cat->delete();
        return redirect()->back()->with('CatDelete','Category Deleted Successfully!');
    }


}
