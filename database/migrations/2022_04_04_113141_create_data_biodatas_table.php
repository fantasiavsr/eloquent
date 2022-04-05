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
        Schema::create('data_biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('nama');
            $table->string('panggilan');
            $table->string('alamat');
            $table->string('email');
            $table->string('hp');
            $table->string('hobi');
            $table->string('belajar');
            $table->string('quote');
            $table->string('quote_author');
            $table->string('link_ig');
            $table->string('link_git');
            $table->string('link_wa');
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
        Schema::dropIfExists('data_biodatas');
    }
};
