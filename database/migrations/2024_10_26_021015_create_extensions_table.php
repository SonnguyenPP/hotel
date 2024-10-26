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
        Schema::create('extensions', function (Blueprint $table) {
            $table->id();
            $table->string('act', 40)->charset('utf8mb4')->nullable();
            $table->string('name', 40)->charset('utf8mb4')->nullable();
            $table->text('description')->charset('utf8mb4')->nullable();
            $table->string('image', 255)->charset('utf8mb4')->nullable();
            $table->text('script')->charset('utf8mb4')->nullable();
            $table->text('shortcode')->comment('object')->nullable();
            $table->text('support')->comment('help section')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=>enable, 2=>disable');
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extensions');
    }
};
