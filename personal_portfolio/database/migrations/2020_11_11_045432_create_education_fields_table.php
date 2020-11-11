<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_fields', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string("institution");
            $table->integer("years");
            $table->date("graduating_in");
            $table->string("status");

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
        Schema::dropIfExists('education_fields');
    }
}
