<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "postulant";
    protected $fillable = ['name','lastname','gender','age','id_rol','birthdate','description','ubication','resume','university',
                            'academic_degree','state'];
    protected $primaryKey = 'id_postulant';


}
