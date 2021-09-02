<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contact', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employee');
            $table->string('present_address');
            $table->string('present_city');
            $table->integer('landline');
            $table->integer('official_mbl');
            $table->string('permanent_address');
            $table->string('permanent_city');
            $table->integer('mobile1');
            $table->integer('mobile2');
            $table->string('contact_person_name');
            $table->string('contact_person_relation');
            $table->integer('contact_person_mobile');
            $table->string('contact_person_address');
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
        Schema::dropIfExists('employee_contact');
    }
}
