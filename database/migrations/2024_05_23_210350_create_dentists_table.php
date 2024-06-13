<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistsTable extends Migration
{
    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('specialization', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dentists');
    }
}
