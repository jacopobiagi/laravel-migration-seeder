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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table -> string('acengy', 60);
            $table -> string('start_station', 60);
            $table -> string('end_station', 60);
            $table -> datetime('start_time');
            $table -> datetime('end_time');
            $table -> string('code', 11) -> unique();
            $table -> integer('num_vag');
            $table -> boolean('delay') -> default(false);
            $table -> boolean('deleted') -> default(false);

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
        Schema::dropIfExists('trains');
    }
};
