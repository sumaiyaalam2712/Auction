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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->nullable()->after('password');
            $table->string('contact')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->longText('biography')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('contact');
            $table->dropColumn('address');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('biography');
        });
    }
};