<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionTest;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller{

    public function main(){
        $questions = Question::all();
        $subjects = Subject::all();
        return view('questions.main', ['questions' => $questions, 'subjects' => $subjects]);
    }
    public function question(Question $question){
        $question_tests = QuestionTest::find($question);
        return view('questions.question', ['question' => $question, 'question_test' => $question_tests]);
    }
    public function subject(){
        return view('questions.subject');
    }
    public function test(){
        return view('questions.test');
    }
}
