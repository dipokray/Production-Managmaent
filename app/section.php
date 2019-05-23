<?php

namespace App;

use App\Traits\AddingCompany;
use Illuminate\Database\Eloquent\Model;


class section extends Model
{
    use AddingCompany;
    protected $fillable = [
        'section_name',
        'company_id',
        'created_by',
        'updated_by'
    ];
}
