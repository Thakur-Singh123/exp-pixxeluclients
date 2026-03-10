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
        Schema::table('ex_service_man_records', function (Blueprint $table) {
            $table->string('force_type')->after('regiment_corps')->nullable();
            $table->string('ppo_no')->after('dor')->nullable();
            $table->string('canteen_card')->after('spouse_micr_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ex_service_man_records', function (Blueprint $table) {
            //
        });
    }
};
