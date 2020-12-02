<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/','HomeController@welcome')->name('welcome');
Route::get('/landing/{id}', 'HomeController@show')->name('homepage');
Route::get('/search-user/{mail}','HomeController@search_user')->name('search.user');
Auth::routes(['verify' => true]);
Route::get('/logout', function () {
    //logout user
    Auth::logout();
    // redirect to homepage
    return redirect('/');
});


Route::middleware(['verified'])->group( function () {
    Route::get('/home', 'HomeController@index')->name('home');
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
    Route::get('/mails-list','ContactFormController@index')->name('mail.view');
    Route::post('/mails-list','ContactFormController@mark')->name('mail.mark');
});
