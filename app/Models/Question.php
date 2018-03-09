<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $fillable = [
    'kind', 'question', 'answer', 'result', 'is_correct', 'score'
  ];
}
