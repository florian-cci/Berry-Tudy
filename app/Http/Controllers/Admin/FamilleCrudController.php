<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FamilleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FamilleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FamilleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Famille::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/famille');
        CRUD::setEntityNameStrings('famille', 'familles');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

				CRUD::column('Inscription_User_ID')->label('Id tilisateur');
				CRUD::column('Inscription_Nom')->label('Nom');
				CRUD::column('Inscription_Prenom')->label('Prénom');
				CRUD::column('Inscription_CP')->label('Code postal');
				CRUD::column('Inscription_Ville')->label('Ville');
				CRUD::column('Inscription_Portable')->label('Portable');
				CRUD::column('Inscription_Email')->label('Email');
				CRUD::column('Inscription_Montant_Total')->label('Montant total');
                $this->crud->addButtonFromModelFunction('line', 'open_pdf', 'openPdf', 'beginning');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FamilleRequest::class);


				CRUD::field('Inscription_User_ID');
				CRUD::field('Inscription_Nom');
				CRUD::field('Inscription_Prénom');
				CRUD::field('Inscription_Adresse');
				CRUD::field('Inscription_CP');
				CRUD::field('Inscription_Ville');
				CRUD::field('Inscription_Fixe');
				CRUD::field('Inscription_Portable');
				CRUD::field('Inscription_Email');
				CRUD::field('Inscription_Pension');
				CRUD::field('Inscription_Nuit');
				CRUD::field('Inscription_Semaine_Demi_Adulte_nb');
				CRUD::field('Inscription_Semaine_Demi_Ado_nb');
				CRUD::field('Inscription_Semaine_Demi_Enfant_12_nb');
				CRUD::field('Inscription_Semaine_Demi_Enfant_3_nb');
				CRUD::field('Inscription_Semaine_Complete_Adulte_nb');
				CRUD::field('Inscription_Semaine_Complete_Ado_nb');
				CRUD::field('Inscription_Semaine_Complete_Enfant_12_nb');
				CRUD::field('Inscription_Semaine_Complete_Enfant_3_nb');
				CRUD::field('Inscription_Nuit_Adulte_nb');
				CRUD::field('Inscription_Nuit_Adulte_nbNuits');
				CRUD::field('Inscription_Nuit_Ado_nb');
				CRUD::field('Inscription_Nuit_Ado_nbNuits');
				CRUD::field('Inscription_Nuit_Enfant_12_nb');
				CRUD::field('Inscription_Nuit_Enfant_12_nbNuits');
				CRUD::field('Inscription_Nuit_Enfant_3_nb');
				CRUD::field('Inscription_Nuit_Enfant_3_nbNuits');
				CRUD::field('Inscription_Montant_A');
				CRUD::field('Inscription_Montant_B');
				CRUD::field('Inscription_Montant_Total');
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
