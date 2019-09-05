<?php

namespace App;

use App\Http\Requests\GroundStoreRequest;
use App\Http\Requests\GroundUpdateRequest;
use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    public function palmFarmer()
    {
        return $this->belongsTo(PalmFarmer::class);
    }

    public function createGround(GroundStoreRequest $request)
    {
        $this->palm_farmer_id = $request->get('palm_farmer_id');
        $this->location = $request->get('location');
        $this->municipality_id = $request->get('municipality_id');
        $this->state_id = $request->get('state_id');
        $this->latitude = $request->get('latitude');
        $this->longitude = $request->get('longitude');
        $this->save();
    }

    public function updateGround(int $id, GroundUpdateRequest $request)
    {
        $this->find($id);
        dd([
        "this" => $this
        ]);
    }
}
