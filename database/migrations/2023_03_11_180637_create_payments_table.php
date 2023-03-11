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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("receiver_id")->nullable();
            $table->bigInteger("sender_id")->nullable();
            $table->bigInteger("job_id")->nullable();
            $table->bigInteger("amount")->nullable();
            $table->string("payment_id")->nullable();
            $table->string("currency")->nullable();
            $table->string("status")->nullable();
            $table->string("method")->nullable();
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
        Schema::dropIfExists('payments');
    }
};
