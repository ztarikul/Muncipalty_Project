<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOarishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oarishes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('oarish_sanad_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('w_name')->nullable();
            $table->string('w_name_en')->nullable();
            $table->string('w_relation')->nullable();
            $table->string('w_relation_en')->nullable();
            $table->string('w_age')->nullable();
            
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
        Schema::dropIfExists('oarishes');
    }
}
