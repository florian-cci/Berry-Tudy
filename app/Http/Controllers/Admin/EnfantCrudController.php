<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EnfantRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EnfantCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EnfantCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Enfant::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/enfant');
        CRUD::setEntityNameStrings('enfant', 'enfants');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {


			CRUD::column('Inscription_User_ID')->label('Id utilisateur');
			CRUD::column('Inscription_Nom')->label('Nom');
			CRUD::column('Inscription_Prenom')->label('Prénom');
			CRUD::column('Inscription_Date_Naissance')->label('Date de naissance');
			CRUD::column('Inscription_Adresse')->label('Adresse');
			CRUD::column('Inscription_CP')->label('Code postal');
			CRUD::column('Inscription_Ville')->label('Ville');

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
        CRUD::setValidation(EnfantRequest::class);


			CRUD::field('Inscription_User_ID');
			CRUD::field('Inscription_Nom');
			CRUD::field('Inscription_Prenom');
			CRUD::field('Inscription_Date_Naissance');
			CRUD::field('Inscription_Sexe');
			CRUD::field('Inscription_CP');
			CRUD::field('Inscription_Ville');
			CRUD::field('Inscription_Urgence_Portable');

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
