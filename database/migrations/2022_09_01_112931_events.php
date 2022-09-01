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
            $table->text('name')->unique();
            $table->text('location');
            $table->text('requirements');
            $table->float('cost')->nullable()->default(150.00);
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('max_participants')->nullable()->default(10);
            $table->boolean('has_food')->nullable()->default(0);
            $table->text('image');
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
        Schema::dropIfExists('events');
    }
};
