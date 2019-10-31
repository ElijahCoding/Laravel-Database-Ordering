<?php

use App\Step;

Route::get('/steps', function () {
    return Step::orderBy('order', 'asc')->get();
});

Route::get('/steps/create', function () {

});
