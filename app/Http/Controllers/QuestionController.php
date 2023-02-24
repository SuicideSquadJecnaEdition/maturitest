<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionBlock;
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
        $question_tests = QuestionTest::where('fk_questiontest_question', $question->question_id)->get();
        $question_block = QuestionBlock::where('fk_questionblock_question', $question->question_id)->get();
        $header = 'Otázku připravujeme..';
        $text = '';
        foreach ($question_block as $qb){
            $header = $qb->header;
            $text = $qb->text;
        }
        return view('questions.question', ['question' => $question, 'question_test' => $question_tests, 'header' => $header, 'text' => $text]);
    }
    public function subject(){
        return view('questions.subject');
    }
    public function test(){
        return view('questions.test');
    }
    public function pristupnost(){
        return view('importantFiles.pristupnost');
    }

    public function check_test(Request $request){
        $good_answer = 0;
        $tests = QuestionTest::where('fk_questiontest_question',$request->question_id)->get();
        $answers = array();
        foreach ($tests as $test){
            $answers[] = $test;
        }
        $temp_count = 0;
        for ($i = 1; $i < count($request->request); $i++){
            $temp = "odpoved" . $i;
            $user_answer = $request->$temp;
            $temp_count++;
            if (strtolower(trim($user_answer)) == strtolower(trim($answers[$i-1]->answer))){
                $good_answer++;
            }
        }
        return $good_answer . ',' . $temp_count;
    }

}
