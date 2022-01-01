<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Recipe;

class IngredientController extends Controller
{
    //

    public function index(){
        $Ing = Ingredient::all();
        return view('Admin/Ingredients',compact('Ing'));
    }

    public function Add(Request $request){
        $Ing = new Ingredient();
        $Ing->Quantity = $request->Quantity;
        $Ing->Milgram = $request->Milgram;
        $Ing->ProductName = $request->ProductName;
        $Ing->RecipesId = $request->RecipesId;
        $Ing->save();
        return redirect()->back()->with('IngAdded','Ingredient inserted Successfully!');
    }

    public function Delete(Request $request){
        $Ing = Ingredient::where('id','=',$request->Id)->first();
        $Ing->delete();
        return redirect()->back()->with('IngDelete','Ingredient Deleted Successfully!');
    }

    public function GetIngredientsById($id){
        $cat = Recipe::where('id','=',$id)->first();
        $Ing = Ingredient::where('RecipesId','=',$id)->get();
        return view('/Admin/Ingredient',compact('Ing','cat'));
    }

}
