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
            $table->string('vin_number');
            $table->year('year');
            $table->string('make');
            $table->string('model');
            $table->string('engine');
            $table->string('drive_train');
            $table->string('transmission');
            $table->string('mileage');
            $table->string('body_style');
            $table->string('interior_color');
            $table->string('exterior_color');
            $table->longText('description');
            $table->longText('highlight');
            $table->text('modification_status');
            $table->string('other_items');
            $table->longText('equipment');
            $table->longText('service_history');
            $table->text('ownership_history');
            $table->string('country');
            $table->string('state');
            $table->decimal('minimum_price');
            $table->decimal('minimum_price_increment');
            $table->date('start_time');
            $table->date('end_time');
            $table->enum('status',['active','inactive']);
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