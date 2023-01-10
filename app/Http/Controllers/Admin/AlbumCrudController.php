<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Artist;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AlbumCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AlbumCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Album::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/album');
        CRUD::setEntityNameStrings('album', 'albums');

        $this->crud->addFields($this->getFieldsData());

        /*
                $this->crud->addField([
                    'label' => 'Artist', // Label for HTML form field
                    'type'  => 'select',  // HTML element which displaying transactions
                    'name'  => 'artist_id', // Table column which is FK for Customer table
                    'entity'=> 'artist', // Function (method) in Customer model which return transactions
                    'attribute' => 'id', // Column which user see in select box
                    'model' => Artist::class // Model which contain FK
                ]);
        */
    }


    private function getFieldsData($show = FALSE) {
        return [
            [
                'name'=> 'name',
                'label' => 'Name',
                'type'=> 'text'
            ],

            [
                'label' => "Article Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ],

            [
                'label' => 'Artist', // Label for HTML form field
                'type'  => 'select',  // HTML element which displaying transactions
                'name'  => 'artist_id', // Table column which is FK for Customer table
                'entity'=> 'artist', // Function (method) in Customer model which return transactions
                'attribute' => 'name', // Column which user see in select box
                'model' => 'App\Models\Artist' // Model which contain FK
            ],

            [    // SelectMultiple = n-n relationship (with pivot table)
                'label'     => "Genre",
                'type'      => ($show ? "select": 'select_multiple'),
                'name'      => 'genres', // the method that defines the relationship in your Model
// optional
                'entity'    => 'genres', // the method that defines the relationship in your Model
                'model'     => "App\Models\Genre", // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
            ],

            [
                'name' => 'year',
                'label' => 'Year of Releasee',
                'type'=> ($show ? "text": 'number')

            ],



        ];

}
    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));

        $this->crud->addButtonFromView('top', 'add_songs', 'add_songs', 'end');


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
        CRUD::setValidation(AlbumRequest::class);

        CRUD::field('name');
        CRUD::field('year');
        CRUD::field('artist_id');


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

    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));

        $this->crud->addColumn(            [
            'label' => 'Songs', // Label for HTML form field
            'type'  => ('select'),  // HTML element which displaying transactions
            'name'  => 'album_id', // Table column which is FK for Customer table
            'entity'=> 'songs', // Function (method) in Customer model which return transactions
            'attribute' => 'name', // Column which user see in select box
            'model' => 'App\Models\Song' // Model which contain FK
        ]);
    }
}
