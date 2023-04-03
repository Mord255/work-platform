<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = "job_application";
    protected $fillable = ['id_job', 'id_postulant', 'presentation_postulant', 'application_status','state'];
    protected $primaryKey = 'id_job_application';


}
