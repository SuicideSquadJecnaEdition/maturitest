<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_id';

    protected $fillable = [
        'name',
        'fk_question_subject',
    ];

    public function questionSubject(){
        return $this->belongsTo(Subject::class, 'fk_question_subject');
    }
}
