<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallationOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installation_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('installation_statuses_id')->constrained();
            $table->foreignId('contracts_id')->constrained();
            $table->date('date_asig')->nullable();
            $table->date('date_ord');
            $table->date('date_end');
            $table->string('description');
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
        Schema::dropIfExists('installation_orders');
    }
}
