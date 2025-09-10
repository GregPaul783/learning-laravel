<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});
