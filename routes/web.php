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
use App\Trip;
use App\Order;


Route::group (['prefix'=>'admin', 'namespace'=> 'Admin', 'middleware'=> ['auth']],function ()
{

    Route::get ('/','DashboardController@index')->name('admin.index');

   ## Route::get ('/order','OrderController@index')->name('order.index');
    Route::get ('/trip/{id}/edit','TripController@edit')->name('trip.edit');
    Route::put ('/trip/{id}/update','TripController@update')->name('trip.update');
    Route::delete ('/trip/{id}/destroy','TripController@destroy')->name('trip.destroy');
    Route::delete ('/order/{id}/destroy','OrderController@destroy')->name('order.destroy');
    Route::get ('/{id}/export','OrderController@export')->name('export.index');

   ## Route::resource('/category', 'CategoryController', ['as'=>'admin']);
});

Route::post ('/new','admin\OrderController@store')->name('task.store');
Route::post ('/new_trip','admin\TripController@store')->name('trip.store');

Route::post ('/money','admin\OrderController@noti')->name('task.noti');
Route::get('/mailTest', 'admin\OrderController@mailTest')->name('mail.index');

Route::get('/ID{id_num}', 'admin\OrderController@show')->name('id.index');

Route::get('/', function ()
{
    $trip = Trip::all();
    return view('welcome',['trips'=>$trip]);
});
/*
Route::get('/video', function ()
{

    return view('video');
});


*/

##Route::get('/testing/{name}' ,'TestController@index');




Auth::routes();



##Route::get('/home', 'HomeController@index')->name('home');
