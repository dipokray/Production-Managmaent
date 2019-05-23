<?php

namespace App;

use App\Traits\AddingCompany;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use AddingCompany;
    protected $fillable =
        [
            'company_id',
        'created_by',
        'updated_by',
        'section_id',
        'employee_name',
            'employee_id',
        'designation',
        'email',
        'address',
        'mobile_no',
        'basic_pay',
        'house_rent',
        'medical_allowance',
        'Photo',
        'status'

        ];
}
