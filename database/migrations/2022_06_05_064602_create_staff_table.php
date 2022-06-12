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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('StaffId');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fatherName');
            $table->string('code');
            $table->string('numberSh');
            $table->integer('countChildren');
            $table->string('phone');
            $table->string('insurance_number');
            $table->string('account_number');
            $table->enum('job',['کارگر','مهندس','کارمند','سرپرست']);
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
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
        Schema::dropIfExists('staff');
    }
};
