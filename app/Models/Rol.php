<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable = ['name', 'name_internal', 'area', 'state'];
    protected $primaryKey = 'id_rol';


}
