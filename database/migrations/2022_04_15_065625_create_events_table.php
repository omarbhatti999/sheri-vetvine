<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
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
            $table->unSignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category_events')->onDelete('cascade');
            $table->string('event_title');
            $table->string('tags');
            $table->string('pdf_file')->nullable();
            $table->string('main_photo')->nullable();
            $table->string('event_add_ytlink')->nullable();
            $table->string('event_add_vimeolink')->nullable();
            $table->string('event_add_video')->nullable();
            $table->string('sponser_one')->nullable();
            $table->string('sponser_two')->nullable();
            $table->string('sponser_three')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('presenter_one')->nullable();
            $table->string('presenter_one_url')->nullable();
            $table->string('presenter_two')->nullable();
            $table->string('presenter_two_url')->nullable();
            $table->string('presenter_three')->nullable();
            $table->string('presenter_three_url')->nullable();
            $table->longText('event_description');
            $table->bigInteger('Vet_Pet_Prof_Fee')->nullable();;
            $table->bigInteger('Pet_Owner_Premium_Fee')->nullable();;
            $table->bigInteger('Pet_Owner_Fee')->nullable();;
            $table->bigInteger('Vet_Pet_Prof_Premium_Fee')->nullable();;
            $table->enum('status', ['0', '1'])->comment('0.disable,1.enable')->default('1');
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
}
