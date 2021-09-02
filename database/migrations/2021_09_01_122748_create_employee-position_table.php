<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_position', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employee');
            $table->foreignId('department_id')->constrained('department');
            $table->foreignId('designation_id')->constrained('designation');
            $table->foreignId('division_id')->constrained('division');
            $table->foreignId('function_id')->constrained('function');
            $table->foreignId('position_id')->constrained('position');
            $table->foreignId('final_approval_id')->constrained('employee');
            $table->foreignId('grade_id')->constrained('grade');
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
        Schema::dropIfExists('employee_position');
    }
}
