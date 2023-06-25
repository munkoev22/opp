<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("surname");
            $table->string('name');
            $table->string('patronymic');
            $table->date('birth_date');
            $table->string('registration_place');
            $table->string('address');
            $table->integer('terrain');
            $table->integer('family_status');
            $table->integer('education');
            $table->integer('employment');
            $table->string('work_place');
            $table->string('insurance_policy');
            $table->string('snils');
            $table->string('medical_organization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
