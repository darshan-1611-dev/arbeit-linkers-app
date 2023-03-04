<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->string("user_title")->nullable();
            $table->integer("is_experience")->default(0);
            $table->string("job_title")->nullable();
            $table->string("job_company")->nullable();
            $table->string("job_location")->nullable();
            $table->string("job_country")->nullable();
            $table->string("job_start_date")->nullable();
            $table->string("job_end_date")->nullable();
            $table->integer("is_working")->default(0);
            $table->string("job_description")->nullable();
            $table->integer("is_education")->default(0);
            $table->string("school_name")->nullable();
            $table->string("degree_title")->nullable();
            $table->string("field_of_study")->nullable();
            $table->string("education_start_date")->nullable();
            $table->string("education_end_date")->nullable();
            $table->string("education_description")->nullable();
            $table->string("language")->nullable();
            $table->string("language_proficiency")->nullable();
            $table->string("skills")->nullable();
            $table->string("hourly_rate")->nullable();
            $table->string("street_address")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->string("postal_code")->nullable();
            $table->string("profile_photo_path")->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('user_details');
    }
};
