<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_images', function (Blueprint $table) {
            $table->id();
            $table->integer('annonce_id')->default(0);
            $table->string('annonce_UID');
            $table->boolean('is_default')->default(0);
            $table->string('image_path');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce_images');
    }
}
