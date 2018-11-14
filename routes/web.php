<?php
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
    //\App\Post::create([
    //    'title'=>'test title',
    //    'content'=>'test content',
    //]);

    //$post = new \App\Post();
    //$post -> title = 'minmin257';
    //$post -> content = 'I finally compelete';
    //$post -> save();

    //$postS = \App\Post::where('id','<',10)->orderBy('id','DESC')->get();
    //dd($postS);

    //$post=\App\Post::find(1);
    //$post -> update([
    //    'title'=>'updated title',
    //    'content'=>'updated content',
    //]);

    //$post=\App\Post::find(1);
    //$post ->title='saved title';
    //$post ->content='saved content';
    //$post ->save();

    //$post=\App\Post::find(1);
    //$post -> delete();

    //\App\Post::destroy(2);

    \App\Post::destroy(3,5,7);

//    $post = \App\Post::find(1);
//    foreach($post->comments as $comment) {
//        echo $comment->title.'<br>';
//    }
//    return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('/hello/{name?}', ['as'=>'hello.index', 'uses'=>'HelloController@index']);
Route::get('/posts', function (){
    return view('posts.index');
});
Route::get('/posts/about', function (){
    return view('posts.about');
});
Route::get('/posts/post', function (){
    return view('posts.post');
});