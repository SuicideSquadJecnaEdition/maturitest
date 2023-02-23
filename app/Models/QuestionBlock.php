<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBlock extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_block_id';

    protected $fillable = [
        'header',
        'text',
        'fk_questionblock_question',
    ];

    public function questionQuestionblock(){
        return $this->belongsTo(Question::class, 'fk_questionblock_question');
    }

}
