<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Config;

class Account extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['full_name', 'cnic', 'rda_account_number', 'email', 'cnic_image', 'family_registration_certificate', 'b_form', 'marriage_certificate', 'insurance_type_id', 'insurance_id', 'plan_id'];
    
    public function insurance_type()
    {
        return $this->belongsTo(InsuranceType::class, 'insurance_type_id', 'id');
    }
    
    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }
    
    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id', 'id');
    }

    public function getCreatedAtAttribute($value)
    {
        if($value == null){
            return null;
        }
        $createdAt = Carbon::parse($value);
        return $createdAt->format(Config::get('constant.config.date_format'));
    }

    public function getUpdatedAtAttribute($value)
    {
        if($value == null){
            return null;
        }
        $updatedAt = Carbon::parse($value);
        return $updatedAt->format(Config::get('constant.config.date_format'));

    }

    public function getDeletedAtAttribute($value)
    {
        if($value == null){
            return null;
        }
        $deletedAt = Carbon::parse($value);
        return $deletedAt->format(Config::get('constant.config.date_format'));
    }

}
