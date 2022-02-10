<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->decimal("amount", 9, 2);
            $table->longText("comment");
            // $table->date("date");
            $table->unsignedBigInteger("year_id");
            $table->foreign('year_id')->references('id')->on('years');
            // ->onDelete('cascade');
            $table->unsignedBigInteger("month_id");
            $table->foreign('month_id')->references('id')->on('months');
            // ->onDelete('cascade');
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
        Schema::dropIfExists('expenses');
    }
}
