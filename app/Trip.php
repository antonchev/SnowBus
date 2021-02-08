<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //


    public function orders()
    {
        return $this->hasMany('App\Order','trip', 'id');
    }

}
