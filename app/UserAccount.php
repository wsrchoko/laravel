<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    protected $fillable = ['username','street','city','state','zip','phone','user_id','country_id'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
