<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Zde vytvaris routy, ktere pouziva controller.
| Routa ma specificky zapis, ktery budeme pouzivat pro jednodussi pochopeni
| Vzor => Route::get/post('/test', [Controller::class, 'nazev funkce'])->name('pojmenovani routy');
| get/post asi nemusim vysvetlovat   //  '/test' -> znaci url a vzdy zacina /  -> toto by bylo domena.cz/test
| Controller -> nazev controlleru na ktery odkazujeme   ::class  se nemeni      //     'nazev funkce' - na kterou chce v controlleru ukazat
| name -> je jednoduche pojmenovani routy => pouziva se napriklad v href, kdyz chceme na tu specifickou routu ukazat / zavolat ji
| NEJDULEZITEJSI vec, aby vam routa fungovala je vymazani cache -> php artisan optimize
*/

// toto je defaultni / jina moznost psani route, ale tu nebudeme pouzivat.
Route::get('/', function () {
    return view('welcome');
});
