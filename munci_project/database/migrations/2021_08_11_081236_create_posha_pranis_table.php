<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoshaPranisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posha_pranis', function (Blueprint $table) {
            $table->id();
            $table->text('file')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('ownertype')->nullable();
            $table->string('bb_wordno')->nullable();
            $table->string('ewname')->nullable();
            $table->string('bwname')->nullable();
            $table->string('gender')->nullable();
            $table->string('mstatus')->nullable();
            $table->string('efname')->nullable();
            $table->string('bfname')->nullable();
            $table->string('esname')->nullable();
            $table->string('bsname')->nullable();
            $table->string('emname')->nullable();
            $table->string('bmname')->nullable();
            $table->string('owner_permadd_eng')->nullable();
            $table->string('owner_permadd_bng')->nullable();
            $table->string('owner_preadd_eng')->nullable();
            $table->string('owner_preadd_bng')->nullable();
            $table->string('nationid')->nullable()->unique();
            $table->string('bcno')->nullable()->unique();
            $table->string('animal_name_en')->nullable();
            $table->string('animal_name')->nullable();
            $table->string('animal_class_en')->nullable();
            $table->string('animal_class')->nullable();
            $table->string('animal_color_en')->nullable();
            $table->string('animal_color')->nullable();
            $table->date('tika_date')->nullable();
            $table->date('tika_next_date')->nullable();
            $table->date('prani_palon_date')->nullable();
            $table->string('animal_age')->nullable();
            $table->string('mob')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            
        
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
        Schema::dropIfExists('posha_pranis');
    }
}
