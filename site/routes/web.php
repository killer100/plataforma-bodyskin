<?php

Route::get('/', function () {
    return View('portal/home');
});

Route::prefix('portal')->group(function(){
    Route::get('/formulario-contacto', 'ContactoController@Index');

    Route::post('/formulario-contacto', function () {
        echo "portal";
    });
});

//Route::get('/api-test/get-contacts', 'TestController@GetContacts');
