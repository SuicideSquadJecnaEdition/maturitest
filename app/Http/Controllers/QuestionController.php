<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller{

    public function main(){
        return view('questions.main');
    }
    public function question(){
        return view('questions.question');
    }
    public function subject(){
        return view('questions.subject');
    }
    public function test(){
        return view('questions.test');
    }
}
