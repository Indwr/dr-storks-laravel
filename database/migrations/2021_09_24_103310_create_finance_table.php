<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->double('laboratory')->default(0);
            $table->double('radiology')->default(0);
            $table->double('consultation')->default(0);
            $table->double('general_medicine')->default(0);
            $table->double('procedures')->default(0);
            $table->double('other')->default(0);
            $table->double('room_charges')->default(0);
            $table->double('nurse_care')->default(0);
            $table->double('doctor_visit')->default(0);
            $table->double('physiotherapy')->default(0);
            $table->double('accounts')->default(0);
            $table->double('operation_theater')->default(0);
            $table->double('pharmacy')->default(0);
            $table->double('therapeutic')->default(0);
            $table->double('driver')->default(0);
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
        Schema::dropIfExists('finance');
    }
}
