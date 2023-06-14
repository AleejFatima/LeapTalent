<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('trainee_id')->Nullable();
            $table->string('trainer_id')->Nullable();
            $table->string('reviews')->Nullable();
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
        Schema::dropIfExists('trainer_reviews');
    }
}
