<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('message')->nullable();
            $table->string('expiry')->nullable();
            $table->string('store_url')->nullable();
            $table->string('checkout_url')->nullable();
            $table->string('order_reference')->nullable();
            $table->string('merchant_order_id')->nullable();
            $table->string('merchant_store_name')->nullable();
            $table->string('coupon_id')->nullable();
            $table->foreignId('account_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
