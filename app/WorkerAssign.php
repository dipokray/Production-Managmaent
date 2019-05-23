<?php

namespace App;

use App\Traits\AddingCompany;
use Illuminate\Database\Eloquent\Model;

class WorkerAssign extends Model
{
    use AddingCompany;
    protected $fillable =[
    'work_section_id',
        'employee_name_id',
        'work_type_id',
        'price',
        'company_id',
        'created_by',
        'updated_by'
    ];
}
