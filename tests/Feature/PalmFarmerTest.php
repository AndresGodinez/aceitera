<?php

namespace Tests\Feature;

use App\PalmFarmer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function factory;

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
        $this->withoutExceptionHandling();

        $user = $this->getDefaultUser();

        $response =  $this->actingAs($user)->get('palm-farmer');

        $response->assertViewIs('PalmFarmers.create');

        $response->assertSee('Nombre');
        $response->assertSee('Dirección');
        $response->assertSee('Teléfono');
        $response->assertSee('RFC');
        $response->assertSee('Guardar');
    }

    /** @test */
    function user_can_see_the_edit_form_with_data_palm_farmer()
    {
        $this->withoutExceptionHandling();

        $user = $this->getDefaultUser();

        $palmFarmer = factory(PalmFarmer::class)->create();

        $response =  $this->actingAs($user)->get('palm-farmer/'. $palmFarmer->id);

        $response->assertViewIs('PalmFarmers.edit');

        $response->assertSee('Nombre');
        $response->assertSee($palmFarmer->name);
        $response->assertSee('Dirección');
        $response->assertSee($palmFarmer->address);
        $response->assertSee('Teléfono');
        $response->assertSee($palmFarmer->phone);
        $response->assertSee('RFC');
        $response->assertSee($palmFarmer->rfc);
        $response->assertSee('Actualizar');
    }

    /** @test */
    function user_can_edit_data_palm_farmer()
    {
        $this->withoutExceptionHandling();

        $user = $this->getDefaultUser();

        $oldName = 'Old Name';
        $newName = 'New Name';

        $palmFarmer = factory(PalmFarmer::class)->create([
            'name' => $oldName
        ]);

        $this->assertDatabaseHas('palm_farmers', [
            'name' => $oldName,
            'address' => $palmFarmer->address,
            'rfc' => $palmFarmer->rfc
        ]);

        $response =  $this->actingAs($user)->put('palm-farmer/'. $palmFarmer->id, [
            'name' => $newName,
            'address' => $palmFarmer->address,
            'rfc' => $palmFarmer->rfc,
            'phone' => $palmFarmer->phone,
        ]);

        $this->assertDatabaseHas('palm_farmers', [
            'name' => $newName,
            'address' => $palmFarmer->address,
            'rfc' => $palmFarmer->rfc
        ]);

        $response->assertRedirect('palm-farmers');
    }
}
