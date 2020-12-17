<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! map';
// });

// Route::get('Rew/test', 'EdgeWizz\Rew\Controllers\RewController@test')->name('test');

Route::post('fmt/rew/store', 'EdgeWizz\Rew\Controllers\RewController@store')->name('fmt.rew.store');

Route::any('fmt/rew/inactive/{id}',  'EdgeWizz\Rew\Controllers\RewController@inactive')->name('fmt.rew.inactive');
Route::any('fmt/rew/active/{id}',  'EdgeWizz\Rew\Controllers\RewController@active')->name('fmt.rew.active');