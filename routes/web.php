<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeVideoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/Signup', function () {
    return view('auth/Signup');
});
Route::get('/Signin', function () {
    return view('auth/Signin');
});
Route::get('/Dashboard', function () {
    return view('Admin/AdminDashboard');
});


Route::get('/RecipeDetails/{id}',[RecipeController::class,'GetInfoById'] );

Route::get('/Admin/Category', [CategoryController::class,'index']);
Route::post('/Admin/AddNewCat', [CategoryController::class, "Add"]);
Route::post('/Admin/deleteCat', [CategoryController::class, "Delete"]);

Route::get('/Admin/Recipes', [RecipeController::class,'index']);
Route::post('/Admin/AddNewRes', [RecipeController::class, "Add"]);
Route::post('/Admin/deleteRes', [RecipeController::class, "Delete"]);

Route::get('/Admin/Recipe/Ingredient/{id}', [IngredientController::class,'GetIngredientsById']);
Route::post('/Admin/Recipe/Ingredient/AddNewIng', [IngredientController::class, "Add"]);
Route::post('/Admin/Recipe/Ingredient/deleteIng', [IngredientController::class, "Delete"]);

Route::get('/Admin/Recipe/Video/{id}', [RecipeVideoController::class,'GetVideosById']);
Route::post('/Admin/Recipe/Video/AddNewVid', [RecipeVideoController::class, "Add"]);
Route::post('/Admin/Recipe/Video/deleteVid', [RecipeVideoController::class, "Delete"]);


Route::post('/SignupForm', [UserController::class, "UserCreate"]);
Route::post('/Login', [UserController::class, "login"]);
Route::get('Logout',[UserController::class,'Logout']);
Route::get('UpdateProfile',[UserController::class,'getUserById']);

Route::get('/Recipe', [RecipeController::class,'GetAllRecipe']);
