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
            $table->string('discharge_image')->after('pan_image')->nullable();
            $table->string('ppo_image')->after('discharge_image')->nullable();
            $table->string('joint_image')->after('ppo_image')->nullable();
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
