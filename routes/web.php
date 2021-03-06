<?php
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return 'coba';
})->middleware(['auth', 'auth.admin']);


Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController');
});

Route::get('/upload', 'PostController@create')->name('upload.index');
Route::post('/upload', 'PostController@store')->name('upload.foto');
Route::get('/{id}/edit', 'PostController@edit')->name('upload.edit');
Route::put('/{id}/post', 'PostController@update')->name('upload.update');
Route::delete('/{id}/delete', 'PostController@destroy')->name('post.delete');
