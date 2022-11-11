<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'question',
        'correct_answer',
        'answer_one',
        'answer_two',
        'answer_three',
        'answer_four',
        'hint',
        'reference',
    ];
}
