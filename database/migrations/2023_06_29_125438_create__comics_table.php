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
        Schema::create('_comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description');
            $table->string('thumb', 100);
            $table->tinyInteger('price', 19.99);
            $table->string('series', 25);
            $table->date('sale_date');
            $table->string('type', 25);


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
        Schema::dropIfExists('_comics');
    }
};
