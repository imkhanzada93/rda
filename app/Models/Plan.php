<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Config;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'coverage_type', 'coverage_criteria', 'eligibility_dependent_includes', 'plan_category_id', 'amount'];
    
    public function plan_category()
    {
        return $this->belongsTo(PlanCategory::class, 'plan_category_id', 'id');
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
