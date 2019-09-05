<?php

namespace App;

use App\Http\Requests\PalmFarmerStoreRequest;
use App\Http\Requests\PalmFarmerUpdateRequest;
use Illuminate\Database\Eloquent\Model;

class PalmFarmer extends Model
{
    public function ground()
    {
        return $this->hasMany(Ground::class);
    }

    public function createPalFarmer(PalmFarmerStoreRequest $request)
    {
        $this->name = $request->get('name');
        $this->address = $request->get('address');
        $this->phone = $request->get('phone');
        $this->rfc = $request->get('rfc');

        $this->save();
    }

    public function updatePalmFarmer(PalmFarmerUpdateRequest $request)
    {
        $this->name = $request->get('name');
        $this->address = $request->get('address');
        $this->phone = $request->get('phone');
        $this->rfc = $request->get('rfc');
        $this->save();
    }

}
