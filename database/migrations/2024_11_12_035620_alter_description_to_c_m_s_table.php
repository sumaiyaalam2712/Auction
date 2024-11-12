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
        Schema::table('c_m_s', function (Blueprint $table) {
           $table->string('sub_title')->nullable()->after('title');
           $table->longText('description')->nullable()->change();
           $table->string('image')->nullable()->after('sub_title');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('c_m_s', function (Blueprint $table) {
            $table->dropColumn('sub_title');
            $table->dropColumn('image');

        });
    }
};