<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\User;
use Illuminate\Support\Facades\Hash;


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
            $table->increments("id");
            $table->string("email");
            $table->string("username");
            $table->string("password");
            $table->timestamps();
        });
        User::create([
            "email" => "ikatanalumni@stmik.co.id",
            'username' => "Admin",
            "password" => Hash::make("adminalumnistmik")
        ]);
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
