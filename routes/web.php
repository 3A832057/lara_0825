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

//Post::create([
//    'title' =>'test title',
//    'content' =>'test content',
//]);
//$posts=Post::all();
//dd($posts);

//$post=Post::find(1);
//dd($post);

//$post=Post::where('id','<',10)->orderBy('id','DESC')->get();
//dd($post);



//$post=Post::find(1);
//$post->update([
//    'title'=>'updated title',
//    'content'=>'updated content',
//]);

//$post=Post::find(1);
//$post->title='saved title';
//$post->content='saved content';
//$post->save();

//$post=Post::find(1);
//$post->delete();

//Post::destroy(3,5,7);

//$allPosts=Post::all();
//dd($allPosts);

//$featuredPosts=Post::where('is_feature',1)->get();
//dd($featuredPosts);

//$fourthPost=Post::find(4);
//dd($fourthPost);

//$lastPost=Post::orderBy('id','DESC')->first();
//dd($lastPost);

$post=Post::find(4);
echo $post->title.'<br>';

foreach($post->comments as $comment){
    echo $comment->content.'<br>';
}



//Route::get('/', function () {
//    return view('index');
//});
Route::get('about',[AboutController::class,'index'])->name('About.index');
Route::get('contact',[ContactController::class,'index'])->name('Contact.index');
Route::get('index',[HomeController::class,'index'])->name('Home.index');
Route::get('post',[PostsController::class,'index'])->name('Post.index');
