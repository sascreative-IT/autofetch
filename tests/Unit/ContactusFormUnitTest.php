<?php

namespace Tests\Unit;

use App\Models\Contactus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactusFormUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_client_can_be_added_through_the_form()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('contactus-post',[
            'full_name'=>'test first name',
            'email'=>'test@gmail.com',
            'phone_number'=>'088715278292',
            'message'=>'Message',

        ]);
        $this->assertCount(1,Contactus::all());
    }
}
