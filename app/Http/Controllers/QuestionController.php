<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller{

    public function main(){
        $questions = Question::all();
        $subjects = Subject::all();
        return view('questions.main', ['questions' => $questions, 'subjects' => $subjects]);
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
