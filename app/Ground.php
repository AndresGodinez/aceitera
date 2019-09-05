<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    public function palmFarmer()
    {
        return $this->belongsTo(PalmFarmer::class);
    }
}
