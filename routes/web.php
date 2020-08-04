<?php

//use Illuminate\Support\Facades\Route; 

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

//tugas

Route::get('/', function () { 
		return view('welcome');
});

//Route::get('/add-siswa', 'SiswaController@index');
//Route::post('/add-siswa', 'SiswaController@savesiswa');

Route::get('/kuman','KumanController@index')->name('kuman.index');
Route::get('/kuman/create','KumanController@create')->name('kuman.create');
Route::post('/kuman/store','KumanController@store')->name('kuman.store');





//

Route::get('illusi', [
	'uses'	=> 'IllusiController@index',
	'as'	=> 'illusi.peserta'
]);