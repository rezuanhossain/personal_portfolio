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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/landing', 'HomeController@show')->name('homepage');
Route::post('/profileupdate','HomeController@update_profile')->name('profile.update');
Route::post('/contact','ContactFormController@contact_me')->name('contact');
Route::post('/education','EducationFieldController@create');
Route::get('/education-view','EducationFieldController@index')->name('education.view');
Route::get('/edication-delete/{id}','EducationFieldController@delete_entry')->name('education.delete');
Route::get('/education-edit/{id}','EducationFieldController@edit')->name('education.edit');
Route::post('/education-update','EducationFieldController@update')->name('education.update');
route::post('/workfield-create','workFieldController@store')->name('workfield.create');
route::get('/workfield-list','workFieldController@index')->name('workfield.list');
route::get('/workfield-delete/{id}','workFieldController@delete')->name('workfield.delete');
route::get('/workfield-edit/{id}','workFieldController@edit')->name('workfield.edit');
Route::post('/workfiled-update','WorkFieldController@update')->name('workfiled.update');
Route::post('/award-create','AwardController@create')->name('award.create');
Route::get('/award-view','AwardController@index')->name('award.view');
route::get('/award-delete/{id}','AwardController@delete')->name('award.delete');
route::get('/award-edit/{id}','AwardController@edit')->name('award.edit');
Route::post('/award-update','AwardController@update')->name('award.update');
