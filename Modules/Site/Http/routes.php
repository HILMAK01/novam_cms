<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Site\Http\Controllers'], function()
{
    Route::get('/', 'SiteController@index');
});
