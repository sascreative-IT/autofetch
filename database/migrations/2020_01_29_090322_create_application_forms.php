<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('area_code');
            $table->string('phone_number');
            $table->date('dob');
            $table->string('driver_license_type');
            $table->string('license_number');
            $table->string('license_version_number');
            $table->text('license')->nullable();
            $table->string('current_employer');
            $table->string('employment_status');
            $table->string('approx_earning');
            $table->string('time_at_employer')->nullable();
            $table->string('job_title')->nullable();
            $table->string('credit_history');
            $table->string('marital_status');
            $table->string('deependents_living_at_home');
            $table->string('street_address1');
            $table->string('street_address2');
            $table->string('city');
            $table->string('state');
            $table->string('postal_zip_code')->nullable();
            $table->string('property_status');
            $table->string('time_at_property');
            $table->string('housing_expnses_per_week');
            $table->string('previous_street_address1');
            $table->string('previous_street_address2');
            $table->string('previous_city');
            $table->string('previous_state');
            $table->string('previous_postal_zip_code')->nullable();
            $table->string('citizenship');
            $table->string('credit_check_approval');
            $table->string('vechicle_required')->nullable();
            $table->string('hear_abt_autofetch')->nullable();
            $table->text('additional_comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_forms');
    }
}
