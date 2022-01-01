<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\RecipeVideo;
use App\Models\Ingredient;
class RecipeController extends Controller
{
    //
    public function index(){
        $Recipe = Recipe::join('categories', 'CatId', '=', 'categories.id')
        ->select('categories.Image as ImageCat','recipes.id as id','Name','Country','CoockingTime','PrepTime','NumberOfServing','Thumbnail','recipes.Image as Image','Image2', 'categories.CategoryName as  CategoryName')
        ->get();
        $categories = Category::all();
        return view('Admin/Recipes',compact('Recipe','categories'));
    }

    public function GetInfoById($id){
        $Recipe = Recipe::join('categories', 'CatId', '=', 'categories.id')
        ->where('recipes.id','=',$id)
        ->select('categories.Image as ImageCat','recipes.description as description','recipes.id as id','Name','Country','CoockingTime','PrepTime','NumberOfServing','recipes.Thumbnail as Thumbnail','recipes.Image as Image','recipes.Image3 as Image3','recipes.Image2 as Image2', 'categories.CategoryName as  CategoryName')
        ->first();
        $RecipeVideo = RecipeVideo::where('RecipesId','=',$id)->get();
        $Ingredient = Ingredient::where('RecipesId','=',$id)->get();
        return view('RecipeDetails',compact('Recipe','RecipeVideo','Ingredient'));
    }

    public function Add(Request $request){
        $rec = new Recipe();
        $rec->Name = $request->Name;
        $rec->description = $request->description;
        $rec->Country = $request->Country;
        $rec->CoockingTime = $request->CoockingTime;
        $rec->PrepTime = $request->PrepTime;
        $rec->NumberOfServing = $request->NumberOfServing;
        $rec->CatId= $request->CatId;
        if ($request->hasfile('Thumbnail')) {
            $file = $request->file('Thumbnail');
         $extension = $file->getClientOriginalExtension();
         $filename = time()."Thumbnail." .$extension;
         $destinationPath = 'uploads/Recipe/';
         $file->move($destinationPath, $filename);
         $rec->Thumbnail=$filename;
         }
         if ($request->hasfile('Image')) {
            $file = $request->file('Image');
         $extension = $file->getClientOriginalExtension();
         $filename = time()."Image." .$extension;
         $destinationPath = 'uploads/Recipe/';
         $file->move($destinationPath, $filename);
         $rec->Image=$filename;
         }
         if ($request->hasfile('Image2')) {
            $file = $request->file('Image2');
         $extension = $file->getClientOriginalExtension();
         $filename = time()."Image2." .$extension;
         $destinationPath = 'uploads/Recipe/';
         $file->move($destinationPath, $filename);
         $rec->Image2=$filename;
         }
         if ($request->hasfile('Image3')) {
            $file = $request->file('Image3');
         $extension = $file->getClientOriginalExtension();
         $filename = time()."Image3." .$extension;
         $destinationPath = 'uploads/Recipe/';
         $file->move($destinationPath, $filename);
         $rec->Image3=$filename;
         }
        $rec->save();

        return redirect()->back()->with('RecAdded','Recipe inserted Successfully!');
    }

    public function Delete(Request $request){
        $cat = Recipe::where('id','=',$request->Id)->first();
        $cat->delete();
        return redirect()->back()->with('RecDelete','Recipe Deleted Successfully!');
    }

    public function GetAllRecipe(){
        $Recipe = Recipe::join('categories', 'CatId', '=', 'categories.id')
        ->select('categories.Image as ImageCat','recipes.id as id','Name','Country','CoockingTime','PrepTime','NumberOfServing','Thumbnail','recipes.Image as Image','Image2', 'categories.CategoryName as  CategoryName')
        ->get();
        $categories = Category::all();
        return view('Recipe',compact('Recipe','categories'));
    }
}
