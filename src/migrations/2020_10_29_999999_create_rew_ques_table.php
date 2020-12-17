<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fmt_rew_ques', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->string('error');
            $table->string('correct');
            $table->tinyInteger('active')->default(1);
            $table->string('hint')->nullable();
            $table->foreignId('media_id')->nullable();
            $table->foreignId('difficulty_level_id')->nullable()->comment = 'id from difficulty_levels table';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fmt_rew_ques');
    }
}
