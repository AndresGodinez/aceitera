<?php

namespace Tests\Feature;

use App\Municipality;
use App\PalmFarmer;
use App\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function factory;

class GroundTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function user_can_add_ground_to_palm_farmer()
    {
        $this->withoutExceptionHandling();

        $user = $this->getDefaultUser();

        $this->seed('StatesAndMunicipalitiesSeeder');

        $palmFarmer = factory(PalmFarmer::class)->create();

        $state = State::find(5);

        $municipalities = Municipality::where('state_id', $state->id)->get();

        $municipality = $municipalities->random();

        $latitude = $this->faker->latitude(-90, 90);
        $longitude = $this->faker->longitude(-90, 90);

        $response = $this->actingAs($user)->post('/ground', [
            'palmFarmerId' => $palmFarmer->id,
            'location' => $municipality->name,
            'municipality_id' => $municipality->id,
            'state_id' => $state->id,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);

        $this->assertDatabaseHas('grounds', [
            'palmFarmerId' => $palmFarmer->id,
            'location' => $municipality->name,
            'municipality_id' => $municipality->id,
            'state_id' => $state->id,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);

        $response->assertRedirect('grounds');
    }
}
