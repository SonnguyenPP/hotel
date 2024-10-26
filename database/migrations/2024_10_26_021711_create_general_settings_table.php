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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 40)->nullable();
            $table->string('cur_text', 40)->nullable()->comment('currency text');
            $table->string('cur_sym', 40)->nullable()->comment('currency symbol');
            $table->string('email_from', 40)->nullable();
            $table->string('email_from_name', 255)->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_template', 255)->nullable();
            $table->string('sms_from', 255)->nullable();
            $table->string('push_title', 255)->nullable();
            $table->string('push_template', 255)->nullable();
            $table->string('base_color', 40)->nullable();
            $table->text('mail_config')->nullable()->comment('email configuration');
            $table->text('sms_config')->nullable();
            $table->text('firebase_config')->nullable();
            $table->text('global_shortcodes')->nullable();
            $table->boolean('kv')->default(0);
            $table->boolean('ev')->default(0)->comment('email verification, 0 - dont check, 1 - check');
            $table->boolean('en')->default(0)->comment('email notification, 0 - dont send, 1 - send');
            $table->boolean('sv')->default(0)->comment('mobile verification, 0 - dont check, 1 - check');
            $table->boolean('sn')->default(0)->comment('sms notification, 0 - dont send, 1 - send');
            $table->boolean('pn')->default(1);
            $table->decimal('tax', 5, 2)->default(0.00);
            $table->string('tax_name', 40)->nullable();
            $table->boolean('multi_language')->default(1)->comment('1⇾Enable, 0⇾Disable');
            $table->boolean('maintenance_mode')->default(1);
            $table->boolean('force_ssl')->default(0);
            $table->boolean('secure_password')->default(0);
            $table->boolean('agree')->default(0);
            $table->boolean('registration')->default(0)->comment('0: Off, 1: On');
            $table->string('active_template', 40)->nullable();
            $table->text('socialite_credentials')->nullable();
            $table->boolean('system_customized')->default(0);
            $table->integer('paginate_number')->default(0);
            $table->boolean('currency_format')->default(0)->comment('1=>Both\r\n2=>Text Only\r\n3=>Symbol Only');
            $table->time('checkin_time')->nullable();
            $table->time('checkout_time')->nullable();
            $table->unsignedInteger('upcoming_checkin_days')->default(1);
            $table->unsignedInteger('upcoming_checkout_days')->default(1);
            $table->string('available_version', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
