<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('mainPage');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
