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
            $table->increments('id')->unsigned();
            $table->string('name', 128);
            $table->string('email', 128)->unique();
            $table->string('password', 100);
            $table->integer('admin_id')->nullable();
			$table->string('address', 128)->nullable();
			$table->string('city', 100)->nullable();
			$table->string('region', 100)->nullable();
			$table->string('postal_code', 100)->nullable();
			$table->string('country', 100)->nullable();
            $table->string('mob_phone', 20)->nullable();  
            $table->string('avatar', 255);
            $table->rememberToken();
            $table->softDeletes();
            $table->dateTime('email_verified_at')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
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
