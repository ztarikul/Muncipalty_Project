<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVumiBeboharCharpotrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vumi_bebohar_charpotros', function (Blueprint $table) {
            $table->id();
            $table->string('a_name')->nullable(); 
            $table->string('father_husband_name')->nullable(); 
            $table->string('pre_address')->nullable(); 
            $table->string('per_address')->nullable(); 
            $table->string('dagno_cs')->nullable(); 
            $table->string('dagno_sa')->nullable(); 
            $table->string('dagno_rs')->nullable(); 
            $table->string('khotian_cs')->nullable(); 
            $table->string('khotian_sa')->nullable(); 
            $table->string('khotian_rs')->nullable(); 
            $table->string('mojar_name')->nullable(); 
            $table->string('land_amount')->nullable(); 
            $table->string('mojar_no')->nullable(); 
            $table->string('plot_prouse')->nullable(); 
            $table->string('owner_des')->nullable(); 
            $table->string('owner_clue')->nullable(); 
            $table->string('registration_date')->nullable(); 
            $table->string('land_preuse')->nullable(); 
            $table->string('land_present')->nullable(); 
            $table->string('ploat_near_road')->nullable(); 
            $table->string('plot_road')->nullable(); 
            $table->string('main_road')->nullable(); 
            $table->string('bazar')->nullable(); 
            $table->string('railway')->nullable(); 
            $table->string('launch')->nullable(); 
            $table->string('airport')->nullable(); 
            $table->string('pond')->nullable(); 
            $table->string('jolabumi')->nullable(); 
            $table->string('natural')->nullable(); 
            $table->string('hill')->nullable(); 
            $table->string('bonna')->nullable(); 
            $table->string('bon')->nullable(); 
            $table->string('park')->nullable(); 
            $table->string('dal')->nullable(); 
            $table->string('historical')->nullable(); 
            $table->string('samorik')->nullable(); 
            $table->string('key_point')->nullable(); 
            $table->string('imp_area')->nullable(); 
            $table->string('north')->nullable(); 
            $table->string('south')->nullable(); 
            $table->string('east')->nullable(); 
            $table->string('weast')->nullable(); 
            $table->string('plot_high')->nullable(); 
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
        Schema::dropIfExists('vumi_bebohar_charpotros');
    }
}
