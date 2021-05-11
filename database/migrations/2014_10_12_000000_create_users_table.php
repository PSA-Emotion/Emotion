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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamps();
            $table->string('profile_image')->default('noimage.jpg');
            $table->string('status')->default('guest');
            $table->string('progress')->default(0);
            $table->integer('banned')->default(0);
            $table->integer('muted')->default(0);
            $table->string('depression_level')->default('testas neatliktas');
            $table->string('tired_level')->default('testas neatliktas');
            $table->string('relationship_level')->default('testas neatliktas');
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
