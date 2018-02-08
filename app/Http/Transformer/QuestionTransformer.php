<?php

namespace App\Http\Transformer;

use App\Models\Question;
use League\Fractal;

class QuestionTransformer extends Fractal\TransformerAbstract
{
    public function transform(Question $question)
    {
        return [
            'id' => $question->id,
            'kind' => $question->kind,
            'question' => $question->question,
            'answer' => $question->answer,
            'result' => $question->result,
            'is_correct' => $question->is_correct, 
            'date' => $question->created_at->toDateString()
        ];
    } 
}