<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function(){
    return view('app');
});
require __DIR__.'/settings.php';
