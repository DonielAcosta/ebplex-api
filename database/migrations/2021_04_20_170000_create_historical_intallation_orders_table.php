<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalIntallationOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_intallation_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('installation_orders_id')->constrained();
            $table->foreignId('installation_statuses_id')->constrained();
            $table->foreignId('users_id')->constrained();
            $table->date('date');
            $table->text('description');
            $table->softDeletes();
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
        Schema::dropIfExists('historical_intallation_orders');
    }
}
