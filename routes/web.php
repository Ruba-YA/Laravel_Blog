<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts' , [PostController::class,"index"]);
Route::get('/post/{ruba}' , [PostController::class,"show"]);
Route::get('/posts' , [PostController::class,"search"]);
Route::get('/categories/{category:slug}',function(Category $category)
{
    return view ('posts' , ['posts' => $category->posts]);
});
