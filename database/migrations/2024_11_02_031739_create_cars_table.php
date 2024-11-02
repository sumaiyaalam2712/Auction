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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('owner_name');
            $table->string('phone');
            $table->string('title');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->string('vin_number')->nullable();
            $table->year('year');
            $table->string('make')->nullable();
            $table->string('model');
            $table->string('engine')->nullable();
            $table->string('drive_train')->nullable();
            $table->string('transmission')->nullable();
            $table->string('mileage')->nullable();
            $table->string('body_style')->nullable();
            $table->string('interior_color');
            $table->string('exterior_color');
            $table->longText('description');
            $table->longText('highlight')->nullable();
            $table->longText('modification_status')->nullable();
            $table->string('other_items');
            $table->longText('equipment');
            $table->longText('service_history')->nullable();
            $table->longText('ownership_history')->nullable();
            $table->string('country');
            $table->string('state');
            $table->decimal('minimum_price');
            $table->decimal('minimum_price_increment')->nullable();
            $table->date('start_time');
            $table->date('end_time')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};