<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOarishSanadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oarish_sanads', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_type')->nullable();
            $table->string('nationid')->nullable()->unique();
            $table->string('bcno')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('dofb')->nullable();
            $table->string('ename')->nullable();
            $table->string('bname')->nullable();
            $table->string('gender')->nullable();
            $table->string('mstatus')->nullable();
            $table->string('ewname')->nullable();
            $table->string('bwname')->nullable();
            $table->string('ehname')->nullable();
            $table->string('bhname')->nullable();
            $table->string('efname')->nullable();
            $table->string('bfname')->nullable();
            $table->string('emname')->nullable();
            $table->string('bmane')->nullable();
            $table->string('flive')->nullable();
            $table->string('fyears')->nullable();
            $table->string('mlive')->nullable();
            $table->string('myears')->nullable();
            $table->string('ocupt')->nullable();
            $table->string('bashinda')->nullable();
            $table->string('p_gram')->nullable();
            $table->string('p_rbs')->nullable();
            $table->string('p_wordno')->nullable();
            $table->string('p_postof')->nullable();
            $table->string('p_thana')->nullable();
            $table->string('p_upzila')->nullable();
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
            $table->string('english_applicant_name')->nullable();
            $table->string('bangla_applicant_name')->nullable();
            $table->string('english_applicant_father_name')->nullable();
            $table->string('bangla_applicant_father_name')->nullable();
            $table->string('mob')->nullable()->unique();
            $table->string('email')->nullable()->unique();
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
        Schema::dropIfExists('oarish_sanads');
    }
}
