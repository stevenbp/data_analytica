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

Route::get('home', function () {
    return view('home');
});

Route::get('/forms', function () {
    return view('forms');
});

// Route::get('/patientForm', function () {
//     return view('patientForm');
// });

Route::get('/patientForm', 'DynamicDependent@index');

Route::post('patientForm/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');

Route::get('/patientDetails', function () {
    return view('patientDetails');
});
