<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        "address","user_id","country_id","city_id",
    ];

    public function user() {
        return $this -> belongsTo(User::class );
    }
    
    public function country() {
        return $this -> belongsTo(Country::class );
    }
    
    public function city() {
        return $this -> belongsTo(City::class );
    }

    public function order() {
        return $this -> hasMany(Order::class );
    }
}
