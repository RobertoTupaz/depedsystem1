<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("stats")->nullable();
            $table->string("page")->nullable();
            $table->integer("page_no")->nullable();
            $table->string("organizational_unit")->nullable();
            $table->integer("salary_grade")->nullable();
            $table->double("authorized_anual_salary", 10, 2)->nullable();
            $table->double("actual_anual_salary", 10, 2)->nullable();
            $table->integer("step")->nullable();
            $table->integer("area_code")->nullable();
            $table->char("area_type", 4)->nullable();
            $table->char("level", 4)->nullable();
            $table->string("position_title")->nullable();
            $table->integer("count")->nullable();
            $table->string("item_number")->nullable();
            $table->string("last_name")->nullable();
            $table->string("first_name")->nullable();
            $table->string("middle_name")->nullable();
            $table->char("sex", 4)->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("tin")->nullable();
            $table->date("date_of_original_appointment")->nullable();
            $table->date("date_of_last_promotion_or_appointment")->nullable();
            $table->char("status", 4)->nullable();
            $table->char("civil_service_eligibility", 10)->nullable();
            $table->integer("emp")->nullable();
            $table->integer("salary_grade2")->nullable();
            $table->integer("step2")->nullable();
            $table->double("actual_anual_salary2", 10, 2)->nullable();
            $table->string("full_name")->nullable();
            $table->string("vice")->nullable();
            $table->char("department", 10)->nullable();
            $table->string("item_number2")->nullable();
            $table->string("reclass_item")->nullable();
            $table->string("item_number3")->nullable();
            $table->string("category_region")->nullable();
            $table->string("school")->nullable();
            $table->string("district")->nullable();
            $table->string("old_item")->nullable();
            $table->string("ct_item")->nullable();
            $table->string("assignment")->nullable();
            $table->string("department2")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
