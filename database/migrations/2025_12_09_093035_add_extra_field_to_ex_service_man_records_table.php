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
            $table->string('spouse_joint_image')->after('spouse_pan_image')->nullable();
            $table->string('spouse_echs_image')->after('spouse_joint_image')->nullable();
            $table->string('spouse_csd_image')->after('spouse_echs_image')->nullable();
            $table->string('spouse_bank_image')->after('spouse_csd_image')->nullable();
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
