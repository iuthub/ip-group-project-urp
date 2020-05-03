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
    return view('index');
})->name('mainPage');
//Route::get('/contact', function () {
//    return view('contact');
//});
Route::get('/contact', 'ContactController@getContactPage')->name('contactPage');

Route::post('/contact/submit', 'ContactController@submitContact')->name('contactSubmit');


Route::get('/about', function () {
    return view('about');
});

Route::get('/events', 'EventController@getEventPage')->name('eventPage');
Route::get('/event/registration', 'EventController@getEventRegistrationPage')->name('registerEventPage');
Route::post('/event/registration', 'EventController@registerEvent')->name('registerEvent');

Route::get('/events/{id}', function (){
    return view('events');
});
