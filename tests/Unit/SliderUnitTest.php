<?php

namespace Tests\Unit;

use App\Models\Slider;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class SliderUnitTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     */
    public function authenticated_users_can_access_slider_page()
    {

        $this->actingAsAdmin();

        $response = $this->get('/slider_index')
            ->assertOk();
    }

    private function actingAsAdmin()
    {
        $this->actingAs(factory(User::class)->create());
    }

    /**
     * @test
     */
    public function a_slider_record_can_be_added_through_a_form()
    {
        $this->withoutExceptionHandling();
        $this->actingAsAdmin();
        $banner_image = "";
        $response = $this->post('/store_or_update_slider', [
            'page_id' => 3,
            'slider_order' => 2,
            'status' => 1,
            'banner_image' => ''
        ]);

        $this->assertCount(1, Slider::all());
    }


    /**
     * @test
     */

    public function test_delete_slider_record()
    {
        $this->actingAsAdmin();
        $this->withoutExceptionHandling();

        $response = $this->post('/store_or_update_slider', [
            'page_id' => 2,
            'slider_order' => 2,
            'status' => 1,

        ]);

        $id = Slider::first()->id;

        $this->callDelete($response, $id);

    }

    private function callDelete($response1, $id)
    {
        if ($response1) {
            $response2 = $this->call('DELETE', 'delete_slider/' . $id, ['_token' => csrf_token()]);
        }

        if ($response2) {

            $this->assertCount(0, Slider::all());
        }
    }

    /**
     * @test
     */

    public function test_update_slider_record()
    {
        $this->actingAsAdmin();
        $this->withoutExceptionHandling();
//insert record
        $response = $this->post('/store_or_update_slider', [
            'page_id' => 2,
            'slider_order' => 3,
            'status' => 1,

        ]);

        $id = Slider::first()->id;
//update_record
        $response = $this->post('/store_or_update_slider', [
            'page_id' => 1,
            'slider_order' => 2,
            'status' => 1,
            'id' => $id
        ]);


        $this->assertCount(1, Slider::all());

    }

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        Event::fake();
    }


}