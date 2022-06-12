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
        Schema::create('new_years', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->nullable();
            $table->unsignedBigInteger('rights');
            $table->unsignedBigInteger('right_to_housing');
            $table->unsignedBigInteger('right_to_food');
            $table->unsignedInteger('child_allowance');
            $table->unsignedInteger('basis_of_daily')->default(0);
            $table->unsignedBigInteger('daily_years');
            $table->unsignedBigInteger('dailyEid');
            $table->float('tax_tate');
            $table->integer('leave')->default(30);
            $table->integer('number_of_days')->default(6);
            $table->integer('number_year')->default(365);
            $table->float('insurance_percentage');
            $table->unsignedBigInteger('tax_calculation_limit');
            $table->unsignedBigInteger('extra_hours');
            $table->unsignedBigInteger('referral_overtime');
            $table->float('right_shift');
            $table->float('shift_work');
            $table->unsignedBigInteger('route');

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
        Schema::dropIfExists('new_years');
    }
};
