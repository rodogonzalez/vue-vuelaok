<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class CountryDivisionPartDestination extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'countries_divisions_parts_destinations';
    /*
    protected $fillable = [
        'name',
        'position_lng',
        'position_lat',
    ];
    */
}
