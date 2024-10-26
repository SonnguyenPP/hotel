<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 40)->nullable();
            $table->string('lastname', 40)->nullable();
            $table->string('username', 40)->nullable();
            $table->string('email', 40)->unique();
            $table->string('dial_code', 40)->nullable();
            $table->string('country_code', 40)->nullable();
            $table->string('mobile', 40)->nullable();
            $table->string('password');
            $table->string('country_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->text('address')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0: banned, 1: active');
            $table->tinyInteger('ev')->default(0)->comment('0: email unverified, 1: email verified');
            $table->tinyInteger('sv')->default(0)->comment('0: mobile unverified, 1: mobile verified');
            $table->tinyInteger('profile_complete')->default(0);
            $table->string('ver_code', 40)->nullable()->comment('stores verification code');
            $table->dateTime('ver_code_send_at')->nullable()->comment('verification send time');
            $table->string('tsc')->nullable();
            $table->string('ban_reason')->nullable();
            $table->rememberToken();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
