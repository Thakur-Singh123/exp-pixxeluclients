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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('army_no')->nullable();
            $table->string('rank')->nullable();
            $table->string('name')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('category_of_ward')->nullable();
            $table->string('force_type')->nullable();
            $table->string('unit_regt_corps')->nullable();
            $table->string('vill')->nullable();
            $table->string('po')->nullable();
            $table->string('tehsil')->nullable();
            $table->string('distt')->nullable();
            $table->string('pin')->nullable();
            $table->string('mob_no')->nullable();
            $table->string('dob')->nullable();
            $table->string('doe')->nullable();
            $table->string('dor')->nullable();
            $table->string('present_pc')->nullable();
            $table->string('ppo_no')->nullable();
            $table->string('dependent_name')->nullable();
            $table->string('no_of_dependent')->nullable();
            $table->string('relation_with_esm')->nullable();
            $table->string('dependent_dob')->nullable();
            $table->string('dependent_occupation')->nullable();
            $table->string('dependent_aadhar')->nullable();
            $table->Longtext('bank_details')->nullable();
            $table->enum('status',['Active','Pending','Reject'])->default('Pending')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
