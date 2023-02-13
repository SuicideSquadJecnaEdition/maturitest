<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{

    public function listing(){
        return view('admin.listing');
    }

    public function update(){
        return view('admin.update');
    }

}
