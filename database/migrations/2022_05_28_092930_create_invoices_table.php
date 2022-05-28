<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('description');
            $table->double('total_amount', 8, 2);
            $table->double('fee_amount', 8, 2);
            $table->string('paypro_id');
            $table->boolean('is_fee_applied');
            $table->string('coupon_code');
            $table->double('discount_amount', 8, 2);
            $table->double('final_amount', 8, 2);
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
        Schema::dropIfExists('invoices');
    }
}
