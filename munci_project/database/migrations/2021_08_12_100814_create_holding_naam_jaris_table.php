<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoldingNaamJarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holding_naam_jaris', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_type')->nullable();
            $table->string('xholder_name')->nullable();
            $table->string('bfname')->nullable();
            $table->string('trimasik_kor')->nullable();
            $table->string('yearly_rate')->nullable();
            $table->string('yearly_amount')->nullable();
            $table->string('last_assesment_date')->nullable();
            $table->string('hold_no')->nullable();
            $table->string('cort_own_name')->nullable();
            $table->string('father_husband')->nullable();
            $table->string('vilage')->nullable();
            $table->string('word_no')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('bhumi_moja_no')->nullable();
            $table->string('khotian_no')->nullable();
            $table->string('dag_no')->nullable();
            $table->string('land_amount')->nullable();
            $table->string('dolildata_name')->nullable();
            $table->string('dolil_no')->nullable();
            $table->string('regoffice_name')->nullable();
            $table->date('reg_date')->nullable();
            $table->string('dolil_hold_no')->nullable();
            $table->string('bohotola_dalan')->nullable();
            $table->string('ektoal_dalan')->nullable();
            $table->string('adafaka_ghor')->nullable();
            $table->string('kaca_ghor')->nullable();
            $table->string('latrin_no')->nullable();
            $table->string('tap_no')->nullable();
            $table->string('tubewel_no')->nullable();
            $table->string('dokan_no')->nullable();
            $table->string('family_amount')->nullable();
            $table->string('condition')->nullable();
            $table->string('monthly_rantrate')->nullable();
            $table->string('rant_lastdate')->nullable();
            $table->string('applicant_other')->nullable();
            $table->string('gr_no_date')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('holding_naam_jaris');
    }
}
