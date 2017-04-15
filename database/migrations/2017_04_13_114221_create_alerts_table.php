<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->bigInteger('zip_code')->nullable();
            $table->bigInteger('purchase_price')->nullable();
            $table->bigInteger('downpayment')->nullable();
            $table->bigInteger('downpayment_percent')->nullable();
            $table->string('credit_score')->nullable();
            $table->boolean('is_veteran')->default(0);
            $table->bigInteger('annual_income')->nullable();
            $table->bigInteger('monthly_debts')->nullable();
            $table->string('property_type')->nullable();
            $table->string('home_using_method')->nullable();
            $table->boolean('first_time')->default(0);
            $table->boolean('new_construction')->default(0);
            $table->boolean('filed_bankruptcy')->default(0);
            $table->boolean('had_foreclosure')->default(0);
            $table->boolean('self_employed')->default(0);
            $table->boolean('year_30_fixed')->default(0);
            $table->boolean('year_20_fixed')->default(0);
            $table->boolean('year_15_fixed')->default(0);
            $table->boolean('year_10_fixed')->default(0);
            $table->boolean('arm_7_1')->default(0);
            $table->boolean('arm_5_1')->default(0);
            $table->boolean('arm_3_1')->default(0);
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
        Schema::dropIfExists('alerts');
    }
}
