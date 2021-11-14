<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

//$post=new Post();
//$post->title='test title';
//$post->content='test content';
//$post->save();

Post::create([
    'title' =>'test title',
    'content' =>'test content',
]);

Route::get('/', function () {
    return view('index');
});
Route::get('about',[AboutController::class,'index'])->name('About.index');
Route::get('contact',[ContactController::class,'index'])->name('Contact.index');
Route::get('index',[HomeController::class,'index'])->name('Home.index');
Route::get('post',[PostsController::class,'index'])->name('Post.index');
