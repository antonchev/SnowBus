<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Order extends Model
{
    //
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i d.m');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('h:i d.m');
    }
    protected $fillable = ['trip','f_Name','l_Name','d_phone','e_mail','stuf','teacher','about'];


    public function trips()
    {
        return $this->belongsTo('App\Trip','trip', 'id');
    }
}


