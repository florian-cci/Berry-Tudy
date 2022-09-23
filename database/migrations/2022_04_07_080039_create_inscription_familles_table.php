<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionFamillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions_famille', function (Blueprint $table) {
            $table->id('Inscription_ID');
						$table->unsignedBigInteger('Inscription_User_ID');
						$table->string('Inscription_Nom');
						$table->string('Inscription_Prenom');
						$table->string('Inscription_Adresse');
						$table->string('Inscription_CP');
						$table->string('Inscription_Ville');
						$table->string('Inscription_Fixe');
						$table->string('Inscription_Portable');
						$table->string('Inscription_Email');
						$table->string('Inscription_Pension')->nullable();
						$table->string('Inscription_Nuit')->nullable();
						$table->string('date_debut')->nullable();
						$table->string('date_fin')->nullable();
						$table->integer('Inscription_Semaine_Demi_Adulte_nb')->nullable();
						$table->integer('Inscription_Semaine_Demi_Ado_nb')->nullable();
						$table->integer('Inscription_Semaine_Demi_Enfant_12_nb')->nullable();
						$table->integer('Inscription_Semaine_Demi_Enfant_3_nb')->nullable();
						$table->integer('Inscription_Semaine_Complete_Adulte_nb')->nullable();
						$table->integer('Inscription_Semaine_Complete_Ado_nb')->nullable();
						$table->integer('Inscription_Semaine_Complete_Enfant_12_nb')->nullable();
						$table->integer('Inscription_Semaine_Complete_Enfant_3_nb')->nullable();
						$table->integer('Inscription_Nuit_Adulte_nb')->nullable();
						$table->integer('Inscription_Nuit_Adulte_nbNuits')->nullable();
						$table->integer('Inscription_Nuit_Ado_nb')->nullable();
						$table->integer('Inscription_Nuit_Ado_nbNuits')->nullable();
						$table->integer('Inscription_Nuit_Enfant_12_nb')->nullable();
						$table->integer('Inscription_Nuit_Enfant_12_nbNuits')->nullable();
						$table->integer('Inscription_Nuit_Enfant_3_nb')->nullable();
						$table->integer('Inscription_Nuit_Enfant_3_nbNuits')->nullable();
						$table->integer('Inscription_Montant_A')->nullable();
						$table->integer('Inscription_Montant_B')->nullable();
						$table->integer('Inscription_Montant_Total')->nullable();
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
        Schema::dropIfExists('inscriptions_famille');
    }
}
