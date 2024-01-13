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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();
            $table->string('subscription_name');
            $table->string('service_type');
            $table->bigInteger('cost_per_page');
            $table->string('set_time');
            $table->bigInteger('min_page');
            $table->bigInteger('max_page');
            $table->bigInteger('rollover_limit');
            $table->bigInteger('total_subscription');
            $table->json('restrictions');
            $table->bigInteger('inform_customer_expiry_date');
            $table->bigInteger('inform_customer_email');
            $table->json('more_restrictions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
