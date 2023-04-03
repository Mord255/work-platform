<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "job";
    protected $fillable = ['title','id_company','position_company','description','requirements','benefits','additionals','ubication',
                            'position_type','state'];
    protected $primaryKey = 'id_job';


}
