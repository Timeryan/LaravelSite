<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{

    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->text('srcImage');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('records');
    }
}
