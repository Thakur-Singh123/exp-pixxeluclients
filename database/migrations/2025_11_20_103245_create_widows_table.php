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
        Schema::create('widows', function (Blueprint $table) {
            $table->id();
            $table->string('ex_service_man_id');
            $table->string('window_name');
            $table->string('date_of_death')->nullable();
            $table->string('window_image')->nullable();
            $table->string('window_aadhar_image')->nullable();
            $table->string('window_pan_image')->nullable();
            $table->enum('status',['Active','Pending','Reject'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('widows');
    }
};
