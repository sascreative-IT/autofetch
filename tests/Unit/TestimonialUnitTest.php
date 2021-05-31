<?php

namespace Tests\Unit;

use App\Models\Testimonial;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class TestimonialUnitTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     */
    public function authenticated_users_can_access_faq_page()
    {

        $this->actingAsAdmin();

        $response = $this->get('/page')
            ->assertOk();
    }

    private function actingAsAdmin()
    {
        $this->actingAs(factory(User::class)->create());
    }

    /**
     * @test
     */
    public function a_testimonial_record_can_be_added_through_a_form()
    {
        $this->withoutExceptionHandling();
        $this->actingAsAdmin();

        $response = $this->post('/store_or_update_testimonial', [
            'rate' => '4',
            'description' => 'Test Description',
            'sort' => 1,
            'status' => 1,
        ]);
        $this->assertCount(1, Testimonial::all());
    }




}
