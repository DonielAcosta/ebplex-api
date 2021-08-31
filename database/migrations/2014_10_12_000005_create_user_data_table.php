<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sex_user_data_id')->constrained('sex_user_data');
            $table->string('name',30);
            $table->string('lastname',30);
            $table->string('identification',12);
            $table->date('date_of_birth');
            $table->string('phone',15);
            $table->string('img')->nullable();
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
        Schema::dropIfExists('user_data');
    }
}
