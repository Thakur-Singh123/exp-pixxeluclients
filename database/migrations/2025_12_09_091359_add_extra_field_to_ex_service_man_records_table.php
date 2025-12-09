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
            $table->string('echs_image')->after('joint_image')->nullable();
            $table->string('csd_image')->after('echs_image')->nullable();
            $table->string('bank_image')->after('csd_image')->nullable();
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
