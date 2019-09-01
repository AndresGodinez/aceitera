<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PalmFarmerTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    function user_can_create_a_palm_farmer()
    {
        $this->withoutExceptionHandling();

        $user = $this->getDefaultUser();
        $name = 'Name One';
        $address = 'Address One';
        $phone = '9621475147';
        $rfc = 'Goca7523';

        $response = $this->actingAs($user)->post('/palm-farmer', [
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'rfc' => $rfc
        ]);

        $this->assertDatabaseHas('palm_farmers', [
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'rfc' => $rfc
        ]);

        $response->assertRedirect('palm-farmers');
    }

    /** @test */
    function user_can_see_the_form_to_create_a_palm_farmer()
    {

    }

    /** @test */
    function user_can_see_the_edit_form_with_data_palm_farmer()
    {

    }

    /** @test */
    function user_can_edit_data_palm_farmer()
    {

    }
}
