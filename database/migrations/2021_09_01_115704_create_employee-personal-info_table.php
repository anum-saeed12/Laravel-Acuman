<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personal_info', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employee');
            $table->string('father_name');
            $table->string('identification_mark');
            $table->enum('martial_status',['single','married','divorced','separated','widowed']);
            $table->date('place_of_birth');
            $table->integer('nic_no');
            $table->date('nic_expire_date');
            $table->enum('blood_group',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->date('ntn_number');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_personal_info');
    }
}

