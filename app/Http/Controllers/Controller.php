<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * toto je "main" controller, od ktereho budou vsechny ostatni controllery dedit
     * Primo sem psat nebudeme, ale budeme vytvaret novy controller pro specificke stranky, napriklad test -> php artisan make:controller TestController
     * Dodrzujte nazev controlleru - NazevController
     * A nejzakladnejsi vec, jak vratit pres funkci stranku je toto:
     *
     *  public function test(){
     *      return view('slozka.nazev_souboru');
     *  }
     *
     * funkce view se automaticky podiva do slozky - resources.views    - a zde hleda slozku -> ve slozce soubor
     * soubor ma format     test.blade.php      ale pise se pouze to "test"
     *
     */
}
