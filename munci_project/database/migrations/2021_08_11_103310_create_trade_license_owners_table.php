<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeLicenseOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_license_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trade_license_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('trade_license_owners');
    }
}
