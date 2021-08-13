<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmarotPukursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emarot_pukurs', function (Blueprint $table) {
            $table->id();
            $table->string('a_name')->nullable(); 
            $table->string('father_husband_name')->nullable(); 
            $table->string('pre_address')->nullable(); 
            $table->string('per_address')->nullable(); 
            $table->string('area_name')->nullable(); 
            $table->string('build_type')->nullable(); 
            $table->string('dagno_cs')->nullable(); 
            $table->string('dagno_sa')->nullable(); 
            $table->string('dagno_rs')->nullable(); 
            $table->string('khotian_cs')->nullable(); 
            $table->string('khotian_sa')->nullable(); 
            $table->string('khotian_rs')->nullable(); 
            $table->string('sit_no')->nullable(); 
            $table->string('land_amount')->nullable(); 
            $table->string('earn_land')->nullable(); 
            $table->string('mojar_name')->nullable(); 
            $table->string('word_no')->nullable(); 
            $table->string('road_name')->nullable(); 
            $table->string('north')->nullable(); 
            $table->string('east')->nullable(); 
            $table->string('south')->nullable(); 
            $table->string('west')->nullable(); 
            $table->string('fst_floor')->nullable(); 
            $table->string('oth_floor')->nullable(); 
            $table->string('site_name')->nullable(); 
            $table->string('position')->nullable(); 
            $table->string('near_way')->nullable(); 
            $table->string('distance')->nullable(); 
            $table->string('far')->nullable(); 
            $table->string('to_north')->nullable(); 
            $table->string('to_south')->nullable(); 
            $table->string('to_east')->nullable(); 
            $table->string('to_west')->nullable(); 
            $table->string('imarot_land')->nullable(); 
            $table->string('pro_imarot_land')->nullable(); 
            $table->string('cu_line')->nullable(); 
            $table->string('water_line')->nullable(); 
            $table->string('ceptic_tank')->nullable(); 
            $table->string('gass_line')->nullable(); 
            $table->string('mol_line')->nullable(); 
            $table->string('when_start')->nullable(); 
            $table->string('destroy_aim')->nullable(); 
            $table->string('notice_jari')->nullable(); 
            $table->string('road_dis')->nullable(); 
            $table->string('imarot_dis')->nullable(); 
            $table->string('gass_dis')->nullable(); 
            $table->string('mol_dis')->nullable(); 
            $table->string('cu_dis')->nullable(); 
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
        Schema::dropIfExists('emarot_pukurs');
    }
}
