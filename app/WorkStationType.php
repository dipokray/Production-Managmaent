<?php

namespace App;

use App\Traits\AddingCompany;
use Illuminate\Database\Eloquent\Model;

class WorkStationType extends Model
{
    use AddingCompany;
    protected $fillable =[
        'station_type_name',
        'company_id',
        'created_by',
        'updated_by'
    ];
}
