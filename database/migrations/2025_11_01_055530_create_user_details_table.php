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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            //Basic info
            $table->string('sr_no', 50)->nullable();
            $table->string('army_no', 100)->nullable();
            $table->string('rank', 100)->nullable();
            $table->string('name', 150)->nullable();
            $table->text('village')->nullable();
            $table->string('post_office', 150)->nullable();
            $table->string('tehsil', 150)->nullable();
            $table->string('district', 150)->nullable();
            $table->string('state', 150)->nullable();
            $table->string('pin_code', 20)->nullable();
            $table->string('mobile_no', 20)->nullable();
            $table->string('regiment_corps', 150)->nullable();
            $table->string('dob')->nullable();
            $table->string('doe')->nullable();
            $table->string('dor')->nullable();
            $table->string('education', 100)->nullable();
            $table->string('present_occupation', 150)->nullable();

            //Bank details (short fields)
            $table->string('bank_acc_no', 50)->nullable();
            $table->string('bank_name', 150)->nullable();
            $table->string('ifsc_code', 20)->nullable();
            $table->string('micr_code', 20)->nullable();

            //Cards
            $table->string('echs_card_no', 50)->nullable();
            $table->string('aadhar_card_no', 50)->nullable();
            $table->string('pan_card_no', 50)->nullable();
            $table->string('csd_card_no', 50)->nullable();

            //Misc
            $table->string('decorator_soldier', 100)->nullable();
            $table->string('disabled', 20)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('reg_on_dgr_portal', 100)->nullable();

            //Spouse
            $table->string('spouse_name', 150)->nullable();
            $table->text('spouse_address')->nullable();
            $table->string('spouse_dob')->nullable();
            $table->string('spouse_education', 100)->nullable();
            $table->string('spouse_mobile', 20)->nullable();
            $table->string('spouse_aadhar_card', 50)->nullable();
            $table->string('spouse_pan_card', 50)->nullable();
            $table->string('spouse_echs_card', 50)->nullable();
            $table->string('spouse_csd_card', 50)->nullable();
            $table->string('spouse_bank_acc_no', 50)->nullable();
            $table->string('spouse_bank_name', 150)->nullable();
            $table->string('spouse_ifsc_code', 20)->nullable();
            $table->string('spouse_micr_code', 20)->nullable();
            $table->string('spouse_image', 255)->nullable();

            //Father
            $table->string('father_name', 150)->nullable();
            $table->text('father_address')->nullable();
            $table->string('father_dob')->nullable();
            $table->string('father_education', 100)->nullable();
            $table->string('father_mobile', 20)->nullable();
            $table->string('father_aadhar_card', 50)->nullable();
            $table->string('father_pan_card', 50)->nullable();
            $table->string('father_echs_card', 50)->nullable();
            $table->string('father_csd_card', 50)->nullable();
            $table->string('father_bank_acc_no', 50)->nullable();
            $table->string('father_bank_name', 150)->nullable();
            $table->string('father_ifsc_code', 20)->nullable();
            $table->string('father_micr_code', 20)->nullable();
            $table->string('father_image', 255)->nullable();

            //Mother
            $table->string('mother_name', 150)->nullable();
            $table->text('mother_address')->nullable();
            $table->string('mother_dob')->nullable();
            $table->string('mother_education', 100)->nullable();
            $table->string('mother_mobile', 20)->nullable();
            $table->string('mother_aadhar_card', 50)->nullable();
            $table->string('mother_pan_card', 50)->nullable();
            $table->string('mother_echs_card', 50)->nullable();
            $table->string('mother_csd_card', 50)->nullable();
            $table->string('mother_bank_acc_no', 50)->nullable();
            $table->string('mother_bank_name', 150)->nullable();
            $table->string('mother_ifsc_code', 20)->nullable();
            $table->string('mother_micr_code', 20)->nullable();
            $table->string('mother_image', 255)->nullable();

            //Widow
            $table->string('window_name', 150)->nullable();
            $table->string('date_of_death')->nullable();
            $table->string('window_image', 255)->nullable();

            //Veer Nari
            $table->string('veer_nari_name', 150)->nullable();
            $table->string('veer_nari_expose_year', 50)->nullable();
            $table->string('veer_nari_image', 255)->nullable();

            //Status
            $table->enum('status', ['Active', 'Pending', 'Suspend'])->default('Pending');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
