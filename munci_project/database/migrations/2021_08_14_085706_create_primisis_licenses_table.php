<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimisisLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primisis_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_type')->nullable();
            $table->string('ownertype')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('ecomname')->nullable();
            $table->string('bcomname')->nullable();
           
            $table->string('owner_permadd_eng')->nullable();
            $table->string('owner_permadd_bng')->nullable();
            $table->string('owner_preadd_eng')->nullable();
            $table->string('owner_preadd_bng')->nullable();
            $table->string('nationid')->nullable();
            $table->string('bcno')->nullable();
            $table->string('vatid')->nullable();
            $table->string('taxid')->nullable();
            $table->string('sign_lenth')->nullable();
            $table->string('sign_width')->nullable();
            $table->string('normal_sign')->nullable();
            $table->string('light_sign')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('house_amount')->nullable();
            $table->date('bus_start')->nullable();
            $table->date('prev_lice_date')->nullable();
            $table->string('business_type_en')->nullable();
            $table->string('business_type')->nullable();
            $table->string('pay_amount')->nullable();
            $table->string('be_gram')->nullable();
            $table->string('be_rbs')->nullable();
            $table->string('be_wordno')->nullable();
            $table->string('be_postof')->nullable();
            $table->string('be_thana')->nullable();
            $table->string('be_upazila')->nullable();
            $table->string('be_dis')->nullable();
            $table->string('bb_gram')->nullable();
            $table->string('bb_rbs')->nullable();
            $table->string('bb_wordno')->nullable();
            $table->string('bb_postof')->nullable();
            $table->string('bb_thana')->nullable();
            $table->string('bb_upazila')->nullable();
            $table->string('bb_dis')->nullable();
            $table->string('mob')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('primisis_licenses');
    }
}
