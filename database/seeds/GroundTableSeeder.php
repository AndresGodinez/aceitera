<?php

use App\Ground;
use App\Municipality;
use App\PalmFarmer;
use App\State;
use Illuminate\Database\Seeder;

class GroundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $palmFarmers = factory(PalmFarmer::class, 50)->create();

        $municipalities = Municipality::where('state_id', 5)->get();


        factory(Ground::class, 100)->create([
            'palm_farmer_id' => $palmFarmers->random()->id,
            'location' => $municipalities->random()->name,
            'state_id' => 5,
            'municipality_id' => $municipalities->random()->id,
        ]);
    }
}
