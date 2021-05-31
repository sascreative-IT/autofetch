<?php

namespace Tests\Unit;

use App\Models\ApplicationForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApplicationFormUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_client_can_be_added_through_the_form()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('application-post',[
            'first_name'=>'test first name',
            'last_name'=>'test last name',
            'email'=>'test@gmail.com',
            'area_code'=>'av1234',
            'phone_number'=>'088715278292',
            'dob'=>'1982-10-02',
            'driver_license_type'=>'test type',
            'license_number'=>'v097522',
            'license_version_number'=>'v23',
            'license'=>' ',
            'current_employer' => 'current employer',
            'employment_status' =>'status',
            'approx_earning' => '200',
            'time_at_employer' => 06,
            'job_title' => 'test developer',
            'credit_history' => 'test history',
            'marital_status' => 'single',
            'deependents_living_at_home' => 5,
            'street_address1' => 'test address',
            'street_address2' => 'test address2',
            'city' => 'test city',
            'state' => 'test state',
            'postal_zip_code' => '999',
            'property_status' => 'status',
            'time_at_property' => '06-months',
            'housing_expnses_per_week' => '12000',
            'previous_street_address1' => 'test address',
            'previous_street_address2' => 'test address2',
            'previous_city' => 'test city',
            'previous_state' => 'test state',
            'previous_postal_zip_code' => '999',
            'citizenship' => 'test work visa',
            'credit_check_approval' => 'test approval',
            'vechicle_required' => 'Ute',
            'additional_comments' => 'test comments',
            'hear_abt_autofetch' => 'test facebook',
        ]);
        $this->assertCount(1,ApplicationForm::all());
    }
}
