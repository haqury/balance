<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_history', function (Blueprint $table) {
            $table->id();
            $table->float('value');
            $table->float('balance');
            $table->integer('user_id');
            $table->timestamps();
        });
        Schema::table('balance_history', function (Blueprint $table) {
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balance_history', function (Blueprint $table) {
            $table->dropIndex(['user_id']);
        });
        Schema::dropIfExists('balance_history');
    }
}
