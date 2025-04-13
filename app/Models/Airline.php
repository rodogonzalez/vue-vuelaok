<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Airline extends Model
{
    use HasFactory;
    use CrudTrait;
    protected $table = 'airlines';
    /*
    protected $fillable = [
        'name',
        'position_lng',
        'position_lat',
    ];
    */
}
