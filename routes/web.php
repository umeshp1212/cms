<?php
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\Country;
use App\Photo;
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


//Route::get('/post/{id}', 'PostController@index');

//Route::resource('posts', 'PostController');


/*------------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|------------------------------------------------------------------------------
|*/


// Route::get('/insert', function (){
//     DB::insert('insert into posts(title, content) values(?,?)', ['PHP with Laravel is awesome','Laravel is the best thing that had happed to PHP, PERIOD']);
// });

// Route::get('/read', function(){
// $result = DB::select('select * from posts where id = ?', [1]);
// return var_dump($result);
// foreach ($result as $post) {
//     return $post->title;
// }
// });

// Route::get('/update', function(){
//     $updated = DB::update('update posts set title = "Update title" where id = ?',[1]);
//     return $updated;
// });

// Route::get('/delete', function(){
//  $deleted = DB::delete('delete from posts where id = ?',[1]);

//  return $deleted;
// });

/*------------------------------------------------------------------------------
| ElOQUENT Model
|------------------------------------------------------------------------------
|*/


// Route::get('/read', function(){
//     $posts = Post::all();

//     foreach ($posts as $post) {
//         return $post->title;
//     }
// });

// Route::get('/find', function(){
//     $post = Post::find(2);
//     return $post->title;
// });

// Route::get('/findwhere', function(){

//  $posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
//  return $posts;
 
// });

// Route::get('/findmore', function(){
    // $posts = Post::findOrFail(1);
    // return $posts;

    //$posts = Post::where('user_count','<')


// });

//Has many through relation part 2

// Route::get('/user/country/{id}', function($id){
//   $country = Country::find($id);
//   foreach($country->posts as $post){
//       return $post;
//   }
// });

//Polymorphic Relations
// Route::get('user/{id}/photos',function($id){
// $user = User::find($id);
// foreach($user->photos as $photo){
//     echo $photo. "<br>";
// }
// });

// Route::get('post/{id}/photos', function($id){
//     $post = Post::find($id);
//     foreach ($post->photos as $photo) {
//         echo $photo."<br>";
//     }
// });

//Inverse Polymorphic Relations
// Route::get('photo/{id}', function($id){
//     $photo = Photo::findOrFail($id);
    
//     return $photo->imageable;
// });


/*------------------------------------------------------------------------------
| CRUD Application
|------------------------------------------------------------------------------
|*/

Route::resource('/posts', 'PostsController');
