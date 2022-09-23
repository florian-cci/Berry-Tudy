<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsEnfantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions_enfant', function (Blueprint $table) {
            $table->id('Inscription_ID');
						$table->unsignedBigInteger('Inscription_User_ID');
						$table->string('Inscription_Nom', 220)->nullable();
						$table->string('Inscription_Prenom', 220)->nullable();
						$table->string('Inscription_Date_Naissance', 220)->nullable();
						$table->enum('Inscription_Sexe', ['garcon', 'fille'])->nullable();
						$table->text('Inscription_Adresse')->nullable();
						$table->string('Inscription_CP', 220)->nullable();
						$table->string('Inscription_Ville', 220)->nullable();
						$table->enum('Inscription_Experience', ['oui', 'non'])->default('non')->nullable();
						$table->enum('Inscription_Venu',['oui', 'non'])->default('non')->nullable();
						$table->integer('Inscription_Ville_Depart_ID')->nullable();
						$table->text('Inscription_Groupe')->nullable()->nullable();
						$table->text('Inscription_autre_enfant')->nullable();
						$table->string('Inscription_Legal1_Lien', 220)->nullable();
						$table->string('Inscription_Legal1_Nom', 220)->nullable();
						$table->string('Inscription_Legal1_Prenom', 220)->nullable();
						$table->text('Inscription_Legal1_Adresse')->nullable();
						$table->string('Inscription_Legal1_CP', 220)->nullable();
						$table->string('Inscription_Legal1_Ville', 220)->nullable();
						$table->string('Inscription_Legal1_Fixe', 220)->nullable();
						$table->string('Inscription_Legal1_Portable', 220)->nullable();
						$table->string('Inscription_Legal1_Email', 220)->nullable();
						$table->text('Inscription_Legal1_Employeur')->nullable();
						$table->string('Inscription_Legal2_Lien', 220)->nullable();
						$table->string('Inscription_Legal2_Nom', 220)->nullable();
						$table->string('Inscription_Legal2_Prenom', 220)->nullable();
						$table->text('Inscription_Legal2_Adresse')->nullable();
						$table->string('Inscription_Legal2_CP', 220)->nullable();
						$table->string('Inscription_Legal2_Ville', 220)->nullable();
						$table->string('Inscription_Legal2_Fixe', 220)->nullable();
						$table->string('Inscription_Legal2_Portable', 220)->nullable();
						$table->string('Inscription_Legal2_Email', 220)->nullable();
						$table->text('Inscription_Legal2_Employeur')->nullable();
						$table->text('Inscription_Situation_Ecole')->nullable();
						$table->string('Inscription_Situation_Classe', 220)->nullable();
						$table->enum('Inscription_Situation_Frere', ['oui', 'non'])->default('non');
						$table->enum('Inscription_Situation_prise_en_change_caf', ['oui', 'non'])->default('non')->nullable();
						$table->integer('Inscription_Situation_frere_soeur')->nullable();
						$table->json('inscription_frere_info')->nullable();
						$table->text('Inscription_Situation_Description')->nullable();
						$table->string('Inscription_Organisme_Intitule', 220)->nullable();
						$table->string('Inscription_Organisme_Nom', 220)->nullable();
						$table->string('Inscription_Organisme_Qualite', 220)->nullable();
						$table->string('Inscription_Organisme_Fixe', 220)->nullable();
						$table->string('Inscription_Organisme_Portable', 220)->nullable();
						$table->string('Inscription_Organisme_Email', 220)->nullable();
						$table->enum('Inscription_Regime_Porc', ['oui', 'non'])->default('non')->nullable();
						$table->text('Inscription_Regime_Intolerance')->nullable();
						$table->text('Inscription_Regime_Allergie')->nullable();
						$table->text('Inscription_Regime_Autre')->nullable();
						$table->string('Inscription_Urgence_Nom', 220)->nullable();
						$table->string('Inscription_Urgence_Prenom', 220)->nullable();
						$table->string('Inscription_Urgence_Parente', 220)->nullable();
						$table->text('Inscription_Urgence_Adresse')->nullable();
						$table->string('Inscription_Urgence_CP', 220)->nullable();
						$table->string('Inscription_Urgence_Ville', 220)->nullable();
						$table->string('Inscription_Urgence_Fixe', 220)->nullable();
						$table->string('Inscription_Urgence_Portable', 220)->nullable();
						$table->string('Inscription_Urgence_Pro', 220)->nullable();
						$table->string('Inscription_Caf_Numero', 220)->nullable();
						$table->string('Inscription_Caf_ref', 220)->nullable();
						$table->string('Inscription_Caf_Ville', 220)->nullable();
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
        Schema::dropIfExists('inscriptions_enfant');
    }
}
