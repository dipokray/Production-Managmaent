<?php

namespace App\Traits;

use App\User;

trait AddingCompany
{
    public static function boot(){
        parent::boot();


        static::creating(function ($model){
            $model->fill([
                'company_id' => auth()->user()->company_id,
                'created_by' => auth()->id()
            ]);
        });

        static::updating(function ($model){
            $model->fill([
                'updated_by' => auth()->id()
            ]);
        });
    }
}