<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $greetings = "Hello World!";
    $help = "Mi è arrivato il letto da montare e sulle recensioni dicono che servono almeno due persone, ma sono da solo e non mi arrenderò";
    $motivation = "ricordate sempre che chi si estranea dalla lotta è un gran figlio di una ...";
    $credits = "cit. il mio prof di italiano in seconda media ai nazionali di calcetto con la scuola";

    $data = [
        'greetings' => $greetings,
        'help' => $help,
        'motivation' => $motivation,
        'credits' => $credits,
    ];
    return view('welcome', $data);
});
