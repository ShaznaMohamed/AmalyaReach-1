<?php

Route::get('/', [
          'uses' => '\App\Http\Controllers\HomeController@index' , 
          'as' => 'home'
]);



?>