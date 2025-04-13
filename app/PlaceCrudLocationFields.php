<?php

namespace App;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
trait PlaceCrudLocationFields
{
    //

    function add_location_create_fields(){

        CRUD::field([
            'name' => 'position_lat',
            'type' => 'text',
            'attributes' => [
                'readonly' => 'readonly',
                'id'       => 'position_lat',
            ]
        ]);

        CRUD::field([
            'name' => 'position_lng',
            'type' => 'text',
            'attributes' => [
                'readonly' => 'readonly',
                'id'       => 'position_lng',
            ]
        ]);

        CRUD::field([  // CustomHTML
            'name'  => 'separator',
            'type'  => 'custom_html',
            'value' => 'Location<hr><div id="map_locater" class="map_crud"></div>'
        ]);

    }
    function add_location_update_fields(){}
}
