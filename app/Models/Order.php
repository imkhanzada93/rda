<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Config;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['status', 'message', 'expiry', 'store_url', 'checkout_url', 'order_reference', 'merchant_order_id', 'merchant_store_name', 'account_id', 'coupon_id'];
}
