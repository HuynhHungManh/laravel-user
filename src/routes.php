<?php
    Route::group(['namespace' => 'hunghbm\userpackage\Http\controllers', 'middleware' => ['web']], function() {
        // API
        Route::get('user/all', 'UserController@index');
        Route::post('user/create', 'UserController@create');
        // Show view
        Route::get('users', 'UserController@view');
    });
?>
