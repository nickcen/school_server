<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScoreToQuestions extends Migration
{

    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->integer('score')->default(1)->comment('得分');
        });
    }


    public function down()
    {

    }
}
