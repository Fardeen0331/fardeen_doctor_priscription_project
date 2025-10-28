<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
        // table::uuid();
    protected $table = "medicines";

    // Primary key
    protected $primaryKey = "id";
    
    // fillable columns 
     protected $fillable = [
        "full_name",
        "age",
        "gender",
        "phone_no",
        "date",
        "time",
        "address",
        "occupation",
        "diet",
        "addiction",
        "mental_health",
        "lab_test"
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
