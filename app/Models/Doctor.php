<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    // table
    protected $table = "doctors";

    // Primary key
    protected $primaryKey = "id";

    // fillable columns 
    protected $fillable = [
        "full_name",
        "age",
        "gender",
        "phone_no",
        "email",
        "date_of_birth",
        "address",
        "cnic",
        "specialization",
        "qualification",
        "pmdc_registrtion_no",
        "clinic_hospital_name",
        "consultaion_fee",
        "availability",
        "perception_access",
        "medicines"
    ];

    protected $keyType = 'string';

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
        });
    }
}
