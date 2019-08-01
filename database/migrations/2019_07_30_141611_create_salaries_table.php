<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Register');
            $table->string('Month');
            $table->integer('Working_days');
            $table->integer('Basic_pay');
            $table->integer('Medical_claim');
            $table->integer('Travel_allowance');
            $table->integer('Dearness_allowance');
            $table->integer('Others');
            $table->integer('Provident_fund');
            $table->integer('Monthly_tax');
            $table->integer('Total');
            $table->string('Salary_notes');
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
        Schema::dropIfExists('salaries');
    }
}
