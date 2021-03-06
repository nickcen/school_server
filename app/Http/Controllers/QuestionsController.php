<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Transformer\QuestionTransformer;

class QuestionsController extends Controller
{
  public function index(Request $request)
  {
    $from_date = $request->input('from_date');
    $to_date = $request->input('to_date');

    $is_correct = $request->input('is_correct');

    $query = Question::whereBetween('created_at', [$from_date, $to_date])->orderBy('created_at', 'asc');
    if (!empty($is_correct)) {
      $query = $query->where('is_correct', $is_correct);
    }
    
    return $this->collection($query->get(), new QuestionTransformer);
  }

  public function store(Request $request)
  { 
    $question = Question::create($this->question_param($request)['question']);
    return $this->item($question, new QuestionTransformer);
  }

  private function question_param(Request $request){
    return $request->only('question.kind', 'question.question', 'question.answer', 'question.result', 'question.is_correct', 'question.score');
  }
}
