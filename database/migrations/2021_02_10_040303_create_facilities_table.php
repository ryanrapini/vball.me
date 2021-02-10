<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('logo_url')->nullable();
            $table->text('cover_photo_url')->nullable();
            $table->text('googlemaps_location')->nullable();
            $table->text('url')->nullable();
            $table->text('contact_info')->nullable();
            $table->string('court_types_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
