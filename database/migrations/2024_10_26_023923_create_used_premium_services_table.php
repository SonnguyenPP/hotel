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
        Schema::create('used_premium_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('booking_id')->default(0);
            $table->unsignedInteger('premium_service_id')->default(0);
            $table->unsignedInteger('room_id')->default(0);
            $table->unsignedInteger('booked_room_id')->nullable();
            $table->unsignedInteger('qty')->default(0);
            $table->decimal('unit_price', 28, 8)->default(0.00000000);
            $table->decimal('total_amount', 28, 8)->default(0.00000000);
            $table->date('service_date')->nullable();
            $table->unsignedInteger('admin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used_premium_services');
    }
};
