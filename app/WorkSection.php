<?php

namespace App;

use App\Traits\AddingCompany;
use Illuminate\Database\Eloquent\Model;

class WorkSection extends Model
{
    use AddingCompany;
    protected $fillable=[
        'work_station',
        'description',
        'station_type_id',
        'status',
        'serial_num',
        'company_id',
        'created_by',
        'updated_by'
    ];
}
