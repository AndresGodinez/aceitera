<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaptureGround extends Model
{
    public function ground()
    {
        return $this->belongsTo(Ground::class);
    }

    public function getInfoCapture()
    {
        return $this->orderBy('id', 'DESC')->paginate();
    }
}
