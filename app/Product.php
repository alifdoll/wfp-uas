<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ownedBy()
    {
        return $this->belongsTo('App\user');
    }
}
