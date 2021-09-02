<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_job', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employee');
            $table->date('offer_date');
            $table->string('present_city');
            $table->enum('probation_period',['1 month','2 month','3 month','4 month','5 month','6 month']);
            $table->date('joining_date');
            $table->date('resignation_date');
            $table->date('last_working_date');
            $table->string('city');
            $table->string('region');
            $table->string('job_title');
            $table->string('location');
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
        Schema::dropIfExists('employee_job');
    }
}
