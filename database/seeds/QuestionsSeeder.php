<?php

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{

  public function run()
  {
    Question::truncate();
    for($i = 0; $i < 20; $i++){
      Question::create([ 'kind' => 'math', 'question' => 'this is book ' . $i, 'answer' => 'author ' . $i, 'result' => $i % 5 + 1, 'is_correct' => true]);
    }
  }
}
