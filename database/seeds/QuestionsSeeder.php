<?php

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{

  public function run()
  {
    Question::truncate();
    for($i = 0; $i < 300; $i++){
      $start = strtotime("1 February 2018");
      $end = strtotime("22 February 2018");

      $timestamp = mt_rand($start, $end);

      Question::create([ 'kind' => ['math1', 'pinyin1', 'pinyin2'][$i % 3], 'question' => 'this is book ' . $i, 'answer' => 'author ' . $i, 'result' => $i % 5 + 1, 'is_correct' => true, 'created_at' => date("Y-m-d", $timestamp)]);
    }
  }
}
