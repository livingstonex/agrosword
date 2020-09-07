<?php

use App\Project;

Route::get('/', function () {
    \SEO::setTitle("AgroSword - Sponsor Agricultural Projects");
    return view('welcome', ['projects' => Project::all()]);
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('projects', 'ProjectController')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/settings', 'SettingsController@index')->name('settings.index');
    Route::post('/settings/update-basic', 'SettingsController@updateBasic')->name('settings.update-basic');
    Route::post('/settings/update-bank', 'SettingsController@updateBank')->name('settings.update-bank');
    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('callback');
    Route::get('investments', 'InvestmentController@index')->name('investments.index');
    Route::get('investments/{id}', 'InvestmentController@show')->name('investments.show');
    Route::get('users/', 'UserController@index')->name('users.index');
    Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
    Route::post('users/edit{id}', 'UserController@update')->name('users.update');
    Route::get('withdrawal', 'WithdrawalController@create')->name('withdrawal.create');
    Route::post('withdrawal/store', 'WithdrawalController@store')->name('withdrawal.store');
});

Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');
Route::get('/privacy', 'PagesController@privacy')->name('pages.privacy');
Route::get('/terms', 'PagesController@terms')->name('pages.terms');
