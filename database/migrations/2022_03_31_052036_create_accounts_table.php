<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('cnic');
            $table->string('rda_account_number');
            $table->string('email');
            $table->text('cnic_image');
            $table->text('family_registration_certificate');
            $table->text('marriage_certificate');
            $table->text('b_form');
            $table->foreignId('insurance_type_id')->constrained();
            $table->foreignId('insurance_id')->constrained();
            $table->foreignId('plan_id')->constrained();
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
        Schema::dropIfExists('accounts');
    }
}
