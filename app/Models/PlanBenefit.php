<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Config;

class PlanBenefit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['plan_id', 'benefit_id', 'amount'];
    
    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id', 'id');
    }

    public function benefit()
    {
        return $this->belongsTo(Benefit::class, 'benefit_id', 'id');
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
