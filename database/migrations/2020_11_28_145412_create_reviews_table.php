<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{

    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table-> string('userName');
            $table-> string('themeMessage');
            $table-> text('textMessage');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
