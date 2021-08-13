<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotunHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notun_holdings', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_type')->nullable();
            $table->string('holder_name_en')->nullable();
            $table->string('holder_name_bn')->nullable();
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
            $table->string('nationid')->nullable();
            $table->string('bcno')->nullable();
            $table->string('vatid')->nullable();
            $table->date('taxid')->nullable();
            $table->string('sign_lenth')->nullable();
            $table->string('sign_width')->nullable();
            $table->string('mob')->nullable();
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
        Schema::dropIfExists('notun_holdings');
    }
}
