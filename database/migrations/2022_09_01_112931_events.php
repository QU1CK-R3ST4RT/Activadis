<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->String('name');
            $table->String('location');
            $table->text('description');
            $table->String('color')->nullable();
            $table->float('cost')->nullable()->default(150.00);
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->boolean('has_food')->nullable()->default(0);
            $table->String('image');
            $table->integer('min_people');
            $table->integer('max_people');
            $table->timestamps();

            $table->foreign('user_id')->references("id")->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
