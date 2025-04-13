<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {              
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('flag')->nullable();
            $table->float('position_lng', 10, 6)->nullable();
            $table->float('position_lat', 10, 6)->nullable();
            $table->string('phone_prefix')->nullable();
            $table->text('description')->nullable();
            $table->string('currency')->nullable();
            $table->enum('language', ['Ingles', 'Español', 'Frances', 'Aleman', 'Italiano','Portugues','Idioma Nativo Americano'])->nullable();
            $table->enum('countries_division_label', ['Departamentos','Provincias','Estados','Regiones'])->nullable();
            $table->string('youtube_video')->nullable();
            $table->string('slug');
            $table->string('image_map')->nullable();
            $table->timestamps();
        });

        Schema::create('countries_divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->float('position_lng', 10, 6)->nullable();
            $table->float('position_lat', 10, 6)->nullable();
            $table->unsignedBigInteger('countries_id');
            $table->string('youtube_video')->nullable();            
            $table->text('photos')->nullable();
            $table->timestamps();
            $table->foreign('countries_id')->references('id')->on('countries');
        });

        Schema::create('countries_divisions_parts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('countries_divisions_id');
            $table->string('name');
            $table->string('slug');
            $table->float('position_lng', 10, 6)->nullable();
            $table->float('position_lat', 10, 6)->nullable();
            $table->string('youtube_video')->nullable();            
            $table->text('photos')->nullable();
            $table->timestamps();
            $table->foreign('countries_divisions_id')->references('id')->on('countries_divisions');
        });


        Schema::create('countries_divisions_parts_destinations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('countries_divisions_parts_id');
            $table->string('name');
            $table->string('slug');
            $table->float('position_lng', 10, 6)->nullable();
            $table->float('position_lat', 10, 6)->nullable();
            $table->string('youtube_video')->nullable();            
            $table->text('photos')->nullable();
            $table->timestamps();
            $table->foreign('countries_divisions_parts_id')->references('id')->on('countries_divisions_parts');
        });

        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('link')->nullable();
            $table->string('logo')->nullable();
            $table->string('youtube_video')->nullable();
            $table->text('countries')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('airlines');
        Schema::dropIfExists('countries_divisions_parts_destinations');
        Schema::dropIfExists('countries_divisions_parts');
        Schema::dropIfExists('countries_divisions');
        Schema::dropIfExists('countries');
    }
};
