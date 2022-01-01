<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Models\RecipeVideo;
class RecipeVideoController extends Controller
{

    public function index(){
        $RC = RecipeVideo::all();
        return view('Admin/Ingredients',compact('RC'));
    }

    public function Add(Request $request){
        $RC = new RecipeVideo();
        $RC->RecipesId = $request->RecipesId;
        $RC->Country = $request->Country;
        $RC->description = $request->description;
        $RC->Title = $request->Title;
        if ($request->hasfile('video')) {
         $file = $request->file('video');
         $extension = $file->getClientOriginalExtension();
         $filename = time()."." .$extension;
         $destinationPath = 'uploads/Video/';
         $file->move($destinationPath, $filename);
         $RC->video=$filename;
         }
        $RC->save();
        return redirect()->back()->with('VideoAdded','Video inserted Successfully!');
    }

    public function Delete(Request $request){
        $RC = RecipeVideo::where('id','=',$request->Id)->first();
        $RC->delete();
        return redirect()->back()->with('VidDelete','Video Deleted Successfully!');
    }

    public function GetVideosById($id){
        $cat = Recipe::where('id','=',$id)->first();
        $RC = RecipeVideo::where('RecipesId','=',$id)->get();
        return view('Admin/Video',compact('RC','cat'));
    }

}
