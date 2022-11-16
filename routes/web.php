<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

    //$allPosts = Post::all();
    //dd($allPosts);多筆

    //$featuredPosts = Post::where('is_feature', 1)->get();
    //dd($featuredPosts);多筆

    //$fourthPost = Post::find(8);
    //dd($fourthPost);單筆

    $lastPost =Post::orderBy('id','DESC')->first();
    dd($lastPost);
    
});

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('post',[PostController::class,'show'])->name('posts.show');
Route::get('contact',[PostController::class,'contact'])->name('posts.contact');
Route::get('about',[PostController::class,'about'])->name('posts.about');
