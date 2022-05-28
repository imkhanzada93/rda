<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Config;

class PlanCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'image'];
    
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
