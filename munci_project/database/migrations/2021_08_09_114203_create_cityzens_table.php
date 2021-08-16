<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityzensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cityzens', function (Blueprint $table) {
            $table->id()->startingValue(100000);
            $table->text('file')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('nationid')->nullable()->unique(); //
            $table->string('bcno')->unique();  //birthcirtificate number
            $table->string('pno')->nullable()->unique(); //passport
            $table->date('dofb')->nullable();   //date of birth  
            $table->string('ename')->nullable();  //name in english
            $table->string('bname')->nullable();
            $table->string('gender')->nullable();
            $table->string('mstatus')->nullable();
            $table->string('eWname')->nullable();
            $table->string('bWname')->nullable();
            $table->string('eHname')->nullable();
            $table->string('bHname')->nullable();
            $table->string('efname')->nullable();
            $table->string('bfname')->nullable();
            $table->string('emname')->nullable();
            $table->string('bmnane')->nullable();
            $table->string('ocupt')->nullable();
            $table->string('qualification')->nullable();
            $table->string('religion')->nullable();
            $table->string('bashinda')->nullable();
            $table->string('p_gram')->nullable();
            $table->string('p_rbs')->nullable();
            $table->string('p_wordno')->nullable();
            $table->string('p_postof')->nullable();
            $table->string('p_thana')->nullable();
            $table->string('p_upazila')->nullable();
            $table->string('p_dis')->nullable();
            $table->string('pb_gram')->nullable();
            $table->string('pb_rbs')->nullable();
            $table->string('pb_wordno')->nullable();
            $table->string('pb_postof')->nullable();
            $table->string('pb_thana')->nullable();
            $table->string('pb_upazila')->nullable();
            $table->string('pb_dis')->nullable();
            $table->string('per_gram')->nullable();
            $table->string('per_rbs')->nullable();
            $table->string('per_wordno')->nullable();
            $table->string('per_postof')->nullable();
            $table->string('per_thana')->nullable();
            $table->string('per_upazila')->nullable();
            $table->string('per_dis')->nullable();
            $table->string('perb_gram')->nullable();
            $table->string('perb_rbs')->nullable();
            $table->string('perb_wordno')->nullable();
            $table->string('perb_postof')->nullable();
            $table->string('perb_thana')->nullable();
            $table->string('perb_upazila')->nullable();
            $table->string('perb_dis')->nullable();
            $table->string('mob')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('attachment_en')->nullable();
            $table->string('attachment_bn')->nullable();
            $table->string('status')->nullable();
            $table->string('seba')->nullable();
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
        Schema::dropIfExists('cityzens');
    }
}
