<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'FilterController@index');
Route::get('/school/{id_name}', 'FilterController@school');
Route::post('/schools', 'FilterController@list_schools');
Route::post('/offices', 'FilterController@list_offices');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
