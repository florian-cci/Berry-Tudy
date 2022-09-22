<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejours', function (Blueprint $table) {
            $table->id('Sejour_ID');
						$table->string('Sejour_Nom', 220);
						$table->date('Sejour_Date_Debut');
						$table->date('Sejour_Date_Fin');
						$table->enum('Sejour_Type', ['Enfant', 'Famille']);
						$table->integer('Sejour_Etat');
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
        Schema::dropIfExists('sejours');
    }
}
