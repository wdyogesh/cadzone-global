<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('employee_code');
            $table->string('department');
            $table->string('designation');
            $table->string('off_on_side');
            $table->string('date_of_birth');
            $table->string('date_of_join');
            $table->string('releaving_date');
            $table->string('uan_no');
            $table->string('pan_no');
            $table->string('esic_no');
            $table->string('bank_number');
            $table->string('ifsc_code');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('blood_group');
            $table->string('emer_contact');
            $table->string('curr_adddress');
            $table->string('curr_country_id');
            $table->string('curr_state_id');
            $table->string('curr_city_id');
            $table->string('curr_pin_code');
            $table->string('perma_address');
            $table->string('perma_country_id');
            $table->string('perma_state_id');
            $table->string('perma_city_id');
            $table->string('perma_pin_code');
            $table->softDeletes();
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
        Schema::dropIfExists('employees');
    }
}
