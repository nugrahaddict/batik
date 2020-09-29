<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail', 'pesanan_id', 'id');
    }

}
