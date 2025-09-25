<?php

use Illuminate\Support\Facades\Route;

Route::get('/pcr', function () {
    return 'Selamat datang di website kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'hallo mahasiswa!';

});

Route::get('/nama/{maya}', function () {
    return 'maya!';

});

Route::get('/nim/{maya}', function ($maya = '') {
    return 'nim saya adalah:'.$maya;

});
