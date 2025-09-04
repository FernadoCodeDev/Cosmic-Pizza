<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';

    protected $fillable = ['description', 'image'];
}


/*

With Laravel use a model per table, the 
model is unique for CRUD operations, you do not have to create 
separate files, Create.php, Update.php, so that is not with Controller 
 and Form Request for the validation of each operation

*/