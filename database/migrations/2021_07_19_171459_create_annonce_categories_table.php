<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_categories', function (Blueprint $table) {
            $table->id();
            $table->string('annonce_UID');
            $table->string('annonce_category_name');
            $table->integer('level');
            $table->boolean('category_status')->default(0);
            $table->integer('annonce_category_id');
            $table->string('picture')->default('');
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce_categories');
    }
}
