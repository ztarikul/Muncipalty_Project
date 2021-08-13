<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRastaKhononsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rasta_khonons', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_type')->nullable();
            $table->string('a_name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('wardno')->nullable();
            $table->string('thana')->nullable();
            $table->string('moholla')->nullable();
            $table->string('dakgor')->nullable();
            $table->string('jela')->nullable();
            $table->string('conholding_no')->nullable();
            $table->string('road_name')->nullable();
            $table->string('proti_name')->nullable();
            $table->string('conmoholla')->nullable();
            $table->string('road_type')->nullable();
            $table->string('length')->nullable();
            
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
        Schema::dropIfExists('rasta_khonons');
    }
}
