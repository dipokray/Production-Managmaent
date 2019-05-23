<?php

namespace App;

use App\Traits\AddingCompany;
use Illuminate\Database\Eloquent\Model;

class WorkType extends Model
{
    use AddingCompany;
    protected $fillable = [
        'work_type',
        'status',
        'price',
        'work_section_id',
        'company_id',
        'created_by',
        'updated_by'
    ];
}
