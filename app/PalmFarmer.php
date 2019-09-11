<?php

namespace App;

use App\Http\Requests\PalmFarmerStoreRequest;
use App\Http\Requests\PalmFarmerUpdateRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PalmFarmer extends Model
{
    public function grounds()
    {
        return $this->hasMany(Ground::class);
    }

    public function palmCaptures()
    {
        return $this->hasMany(PalmCapture::class);
    }

    public function scopeName($query, $name)
    {
        if ($name){
            return $query->where('name', 'Like', "%$name%");
        }
    }

    public function getPalmFarmers(Request $request)
    {
        $name = $request->get('name');

        return $this->orderBy('id', 'desc')
                ->name($name)
                ->paginate();
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
