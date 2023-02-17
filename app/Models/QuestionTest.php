<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionTest extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_test_id';

    protected $fillable = [
        'question',
        'answer',
        'fk_questiontest_question',
    ];

    public function questionTest(){
        return $this->belongsTo(Question::class, 'fk_questiontest_question');
    }
}
