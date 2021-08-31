<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_users_id')->constrained();
            $table->foreignId('owner_clients_id')->nullable()->constrained('owner_clients');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active');
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
        Schema::dropIfExists('users');
    }
}
