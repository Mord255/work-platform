<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "company";
    protected $fillable = ['name', 'ruc', 'business_name', 'quantity_employees', 'description', 'ubication', 'state'];
    protected $primaryKey = 'id_company';


}
