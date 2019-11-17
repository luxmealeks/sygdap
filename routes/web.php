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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/home', function () {
    return view('accueil');
});
/* Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
}); */

Route::post('/pieces/agrements', 'PieceController@store');

Route::get('/prestataires/selecttype', function () {
    return view('prestataires.selecttype');
})->name('prestataires.selecttype');

Route::get('/prestataires/print', function () {
    return view('prestataires.print');
})->name('prestataires.print');

Route::get('/prestataires/details', function () {
    return view('prestataires.details');
})->name('prestataires.details');

Route::get('/auth/register', function () {
    return view('auth.register');
})->name('auth.register');

/*  Route::get('/prestataires/{formateur}/print', function () {
     return view('prestataires.print');
 })->name('prestataires.print');

  Route::get('/users/app', function () {
      return view('users.app');
  })->name('users.app');
*/
Route::get('/accueil', 'HomeController@index')->name('accueil');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profiluser', 'UserController@index')->name('profiluser');
Route::get('/prestataires/list', 'PrestataireController@list')->name('prestataires.list');
// Route::get('/prestataires//{id}', 'PrestataireController@list')->name('prestataires.list');
// Route::get('/prestataires/selecttype', 'PrestataireController@create')->name('prestataires.selecttype');

Route::get('/prestataires/index', 'PrestataireController@index')->name('prestataires.index');
Route::get('/prestataires/createprestataire', 'PrestataireController@create')->name('prestataires.createprestataire');
Route::get('/secteurs/list', 'SecteurController@list')->name('secteurs.list');
Route::get('/secteurs/index', 'SecteurController@index')->name('secteurs.index');
Route::get('/secteurs/createsecteur', 'SecteurController@create')->name('secteurs.createsecteur');
Route::get('/secteurs/{id}/destroy', 'SecteurController@destroy');

Route::get('/types/index', 'TypeController@index')->name('types.index');
Route::get('/types/createtype', 'TypeController@create')->name('types.createtype');

// Route::get('/types/createactivite', 'TypeController@create')->name('types.createactivite');
Route::get('/types/list', 'TypeController@list')->name('types.list');
Route::get('/prestataires/{id}/destroy', 'PrestataireController@destroy');
Route::get('prestataires/{prestataire}/edit', 'PrestataireController@edit');
Route::get('prestataires/{prestataire}/print', 'PrestataireController@print');
Route::get('prestataires/{id}/details', 'PrestataireController@details');

Route::get('prestataires/lastrecords', 'PrestataireController@lastrecords');

Route::get('/pieces/list', 'PieceController@list')->name('pieces.list');
Route::get('/pieces/index', 'PieceController@index')->name('pieces.index');
Route::get('/prestataires/printpdf', 'PrestataireController@generateReportPDF')->name('prestataires.printpdf');
Route::get('users/{user}/destroy', 'UserController@destroyForm');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/index', 'UserController@index')->name('users.create');
Route::get('/users/{id}/edit', 'RoleController@edit')->name('users.edit');
Route::get('/roles/index', 'UserController@index')->name('roles.index');

// Route::get('/pieceupload/create', 'PieceController@create')->name('pieceupload.create');

// Route::get('/pieces/piece_upload', 'PieceController@create')->name('pieces.piece_upload');
// Route::get('/piece_upload/action', 'PieceController@action')->name('pieceupload.action');

// Route::resource('prestataires', 'PrestataireController', ['only' => ['index', 'destroy']]);
// Route::resource('prestataires', 'PrestataireController', ['only' => ['update', 'destroy']]);
 Route::delete('pieces/{piece}/edit', 'PrestataireController@edit');

Route::resource('/secteurs', 'SecteurController');
Route::resource('/prestataires', 'PrestataireController');
Route::resource('/types', 'TypeController');
Route::resource('/users', 'UserController');
Route::resource('/pieces', 'PieceController');
Route::resource('/roles', 'RoleController');
