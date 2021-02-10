<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name');
            $table->text('description');
            $table->foreignId('facility_id')->constrained('facilities');
            $table->bigInteger('owner_id')->nullable();
            $table->date('start_date');
            $table->time('start_time');
            $table->time('end_time')->nullable();
            $table->string('price')->nullable();
            $table->string('price_type')->nullable();
            $table->boolean('is_charity')->default(false);
            $table->integer('court_type');
            $table->integer('format_enum');
            $table->string('special_traits_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}
