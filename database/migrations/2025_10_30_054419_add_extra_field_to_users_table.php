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
             $table->string('phone')->after('remember_token')->nullable();
            $table->string('city')->after('phone')->nullable();
            $table->string('state')->after('city')->nullable();
            $table->string('joining_date')->after('state')->nullable();
            $table->enum('user_type', ['Admin','Customer'])->after('joining_date')->default('Customer')->nullable();
            $table->enum('status', ['Active','Pending','Reject'])->after('user_type')->default('Pending')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
