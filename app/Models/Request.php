<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'user_id','lat','lang','size','images','address'
    ];

    protected $casts = [
        "images" => "array"
    ];

    public function user() {
        return $this -> belongsTo(User::class );
    }

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }
}
