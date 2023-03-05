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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->nullable();
            $table->string("project_title")->nullable();
            $table->longText("project_description")->nullable();
            $table->string("job_type")->nullable();
            $table->string("skills")->nullable();
            $table->integer("min_salary")->nullable();
            $table->integer("max_salary")->nullable();
            $table->integer("job_duration")->nullable();
            $table->string("experience_level")->nullable();
            $table->integer("is_bid_done")->default(0);
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
        Schema::dropIfExists('jobs');
    }
};
