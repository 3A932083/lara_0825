<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Comment;
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

    /*
    echo'用comments()擷取該post所有評論'.'<br>';
    $post = Post::find(8);
    echo'標題：'.$post->title.'<br>';
    echo'內容：'.$post->content.'<br>';
    echo'~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~'.'<br>';
    $comments = $post->comments;
    foreach ($comments as $comment){
        echo'留言：'.$comment->content.'<br>';
        echo'~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~'.'<br>';
    }*/


    //echo'<br>';
    //echo'用post()擷取所屬的貼文'.'<br>';
    $comment = Comment::find(6);
    echo '內容：'.$comment->content.'<br>';
    echo'---------------------------------------------------------'.'<br>';
    $post = $comment->post;
    echo '編號：'.$post->id.'<br>';
    echo '標題：'.$post->title.'<br>';
    echo '內容：'.$post->content.'<br>';

});

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('post',[PostController::class,'show'])->name('posts.show');
Route::get('contact',[PostController::class,'contact'])->name('posts.contact');
Route::get('about',[PostController::class,'about'])->name('posts.about');
