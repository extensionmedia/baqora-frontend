<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->string('annonce_UID');
            $table->integer('annonce_category_id');
            $table->integer('annonce_sous_category_id')->default(0);
            $table->integer('client_id')->default(0);
            $table->integer('annonce_type_id');
            $table->integer('city_id');
            $table->integer('city_sector_id');
            $table->integer('vehicule_marque_id');
            $table->integer('vehicule_marque_serie_id');
            $table->integer('vehicule_carburant_id');
            $table->integer('vehicule_class_id');
            $table->integer('vehicule_puissance_fiscale_id');
            $table->string('vehicule_model_annee')->nullable();
            $table->string('vehicule_kilometrage')->nullable();
            $table->integer('nombre_piece');
            $table->string('superficie')->nullable();
            $table->string('titre');
            $table->string('telephone')->nullable();
            $table->text('description')->nullable();
            $table->integer('prix')->default(0);
            $table->integer('prix_type')->default(1);
            $table->string('slug')->nullable();
            $table->integer('visited')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
