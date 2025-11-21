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
        Schema::create('veer_naris', function (Blueprint $table) {
            $table->id();
            $table->string('ex_service_man_id');
            $table->string('veer_nari_name');
            $table->string('veer_nari_expose_year')->nullable();
            $table->string('veer_image')->nullable();
            $table->string('veer_aadhar_image')->nullable();
            $table->string('veer_pan_image')->nullable();
            $table->enum('status',['Active','Pending','Reject'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veer_naris');
    }
};
