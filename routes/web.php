<?php

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
Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});


Route::get('/hobbie', 'HobbieController@Hobbie');


Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/update', 'PostController@update');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Route::get('/hobbie/delete', 'HobbieController@delete');
Route::get('/hobbie/update', 'HobbieController@update');
Route::get('/hobbie/create', 'HobbieController@create');


Route::get('/aboutPosts', 'AboutController@index')->name('aboutPosts.index');
Route::get('/contactsPost', 'ContactsController@index')->name('contactsPosts.index');
Route::get('/main', 'MainController@index')->name('main.index');

Route::get('/like/create', 'LikesController@create');
Route::get('/like/update', 'LikesController@update');
Route::get('/like/delete', 'LikesController@delete');

Route::get('/about', 'aboutlikescontroller@index')->name('aboutLikes.index');
Route::get('/contacts', 'contactslikescontroller@index')->name('contactsLikes.index');

Route::group(['namespace' => 'Likes'], function () {
    Route::get('/likes', 'IndexController')->name('likes.index');
    Route::get('/likes/create', 'CreateController')->name('likes.create');
    Route::post('/likes', 'StoreController')->name('likes.store');
    Route::get('/likes/{like}', 'ShowController')->name('likes.show');
    Route::get('/likes/{like}/edit', 'EditController')->name('likes.edit');
    Route::patch('/likes/{like}', 'UpdateController')->name('likes.update');
    Route::delete('/likes/{like}', 'DestroyController')->name('likes.destroy');

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {

    Route::group(['namespace' => 'Post'], function() {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });

});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
