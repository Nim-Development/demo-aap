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
    return redirect('cateraars');
});



// | Domain | Method   | URI                  | Name            | Action                                        | Middleware   |
// +--------+----------+----------------------+-----------------+-----------------------------------------------+--------------+
// |        | GET|HEAD | cateraars            | cateraars.index | App\Http\Controllers\CateraarController@index | web          |
// |        | GET|HEAD | cateraars/{cateraar} | cateraars.show  | App\Http\Controllers\CateraarController@show  | web          |
// +--------+----------+----------------------+-----------------+-----------------------------------------------+--------------+
Route::resource('cateraars', 'CateraarController', ['only' => ['index', 'show']]);



// | Domain | Method    | URI                     | Name               | Action                                          | Middleware   |
// +--------+-----------+-------------------------+--------------------+-------------------------------------------------+--------------+
// |        | POST      | opdrachten              | opdrachten.store   | App\Http\Controllers\CateraarController@store   | web          |
// |        | DELETE    | opdrachten/{opdrachten} | opdrachten.destroy | App\Http\Controllers\CateraarController@destroy | web          |
// +--------+-----------+-------------------------+--------------------+-------------------------------------------------+--------------+
Route::resource('opdrachten', 'OpdrachtController', ['only' => ['store', 'destroy']]); // cruds

