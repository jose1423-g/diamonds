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
        Schema::create('info_company', function (Blueprint $table) {
            $table->increments('id_company')->primary();
            $table->string('name_company', 50)->nullable();
            $table->string('img_company')->nullable();
            $table->binary('DESCRIPTION')->nullable();
            $table->binary('mision')->nullable();
            $table->binary('vision')->nullable();
            $table->string('facebook', 225)->nullable();
            $table->string('instagram', 225)->nullable();
            $table->string('tiktok', 225)->nullable();
            $table->string('number1', 50)->nullable();
            $table->string('number2', 50)->nullable();
            $table->string('number3', 50)->nullable();            
            $table->string('img_head', 225)->nullable();
            $table->binary('description_en')->nullable();
            $table->binary('vision_en')->nullable();
            $table->binary('mision_en')->nullable();
        });

        Schema::create('pricipal_content', function (Blueprint $table) {
            $table->increments('id_cont')->primary();
            $table->string('images')->nullable();
            $table->string('description', 250)->nullable();
            $table->string('titles', 50)->nullable();
            $table->string('subtitles', 50)->nullable();
            $table->float('prices', null, 0)->nullable();
        });

        Schema::create('qandans', function (Blueprint $table) {
            $table->increments('id_qandans')->primary();
            $table->string('question', 100)->nullable();
            $table->string('answer', 255)->nullable();
            $table->binary('question_en')->nullable();
            $table->binary('answer_en')->nullable();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id_rev')->primary();
            $table->string('review_text', 250)->nullable();
            $table->string('review_img')->nullable();
            $table->string('review_vid')->nullable();
            $table->string('review_description', 100)->nullable();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->increments('id_services')->primary();
            $table->string('icon')->nullable();
            $table->string('tittle', 50)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('tittle_en', 255)->nullable();
            $table->binary('description_en')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_company');
        Schema::dropIfExists('pricipal_content');
        Schema::dropIfExists('qandans');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('services');
    }
};
