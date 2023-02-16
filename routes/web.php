<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
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

Route::redirect('/', 'main');

Route::get('/sign-in', [AuthController::class, 'signIn'])->name('signIn.index');

Route::get('/main', [QuestionController::class, 'main'])->name('questions.main');
Route::get('/question', [QuestionController::class, 'question'])->name('questions.question');
Route::get('/subject', [QuestionController::class, 'subject'])->name('questions.subject');
Route::get('test', [QuestionController::class, 'test'])->name('questions.test');

Route::get('/admin/listing', [AdminController::class, 'listing'])->name('admin.listing');
Route::get('/admin/update', [AdminController::class, 'update'])->name('admin.update');
