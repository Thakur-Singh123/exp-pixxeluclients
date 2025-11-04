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
            $table->string('aadhar_image')->after('image')->nullable();
            $table->string('pan_image')->after('aadhar_image')->nullable();
            $table->string('spouse_aadhar_image')->after('spouse_image')->nullable();
            $table->string('spouse_pan_image')->after('spouse_aadhar_image')->nullable();
            $table->string('father_aadhar_image')->after('father_image')->nullable();
            $table->string('father_pan_image')->after('father_aadhar_image')->nullable();
            $table->string('mother_aadhar_image')->after('mother_image')->nullable();
            $table->string('mother_pan_image')->after('mother_aadhar_image')->nullable();
            $table->string('window_aadhar_image')->after('window_image')->nullable();
            $table->string('window_pan_image')->after('window_aadhar_image')->nullable();
            $table->string('veer_nari_aadhar_image')->after('veer_nari_image')->nullable();
            $table->string('veer_nari_pan_image')->after('veer_nari_aadhar_image')->nullable();
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
