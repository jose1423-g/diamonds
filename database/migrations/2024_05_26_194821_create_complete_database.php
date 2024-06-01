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
            $table->integer('id_company')->primary();
            $table->string('name-company', 50)->nullable();
            $table->binary('img-company')->nullable();
            $table->string('description', 250)->nullable();
            $table->string('mision', 250)->nullable();
            $table->string('vision', 250)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('tiktok', 100)->nullable();
            $table->string('number1', 50)->nullable();
            $table->string('number2', 50)->nullable();
            $table->string('number3', 50)->nullable();
        });

        Schema::create('gallery', function (Blueprint $table) {
            $table->integer('id_img')->primary();
            $table->binary('img_gallery')->nullable();
            $table->string('name_img', 100)->nullable();
            $table->boolean('status')->nullable();
        });

        Schema::create('principal_content', function (Blueprint $table) {
            $table->integer('id_cont')->primary();
            $table->binary('images')->nullable();
            $table->string('description', 250)->nullable();
            $table->string('titles', 50)->nullable();
            $table->string('subtitles', 50)->nullable();
            $table->float('prices', null, 0)->nullable();
        });

        Schema::create('qandans', function (Blueprint $table) {
            $table->integer('id_qandans')->primary();
            $table->string('question', 100)->nullable();
            $table->string('answer', 100)->nullable();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('id_rev')->primary();
            $table->string('review-text', 250)->nullable();
            $table->binary('review-img')->nullable();
            $table->binary('review-vid')->nullable();
            $table->string('review-description', 100)->nullable();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->integer('id-services')->primary();
            $table->binary('icon')->nullable();
            $table->string('tittle', 50)->nullable();
            $table->string('row', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complete_database');
    }
};
