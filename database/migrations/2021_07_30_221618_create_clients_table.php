<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('UID');
            $table->integer('client_type_id')->default(0);
            $table->integer('city_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0)->nullable();
            $table->string('nom')->nullable();
            $table->string('societe')->nullable();
            $table->string('telephone_01')->nullable();
            $table->string('adresse')->nullable();
            $table->string('email')->nullable();
            $table->string('login');
            $table->string('pwd');
            $table->text('remarque')->nullable();

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
        Schema::dropIfExists('clients');
    }
}
