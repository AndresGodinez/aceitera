<?php

namespace App;

use App\Http\Requests\PalmCaptureStoreRequest;
use Illuminate\Database\Eloquent\Model;

class PalmCapture extends Model
{
    public function palmFarmer()
    {
        return $this->belongsTo(PalmFarmer::class);
    }

    public function saveCapture(PalmCaptureStoreRequest $request)
    {
        $palmFarmerId =  $request->get('palmFarmerId');
        $tons =  $request->get('tons');

        $this->palm_farmer_id = $palmFarmerId;
        $this->tons = $tons;

        $this->save();


    }
}
