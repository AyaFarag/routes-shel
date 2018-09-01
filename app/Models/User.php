<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Hash;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        "name", "email", "password", "device_token"
    ];

    protected $hidden = [
        "password", "remember_token",
    ];

    protected $casts = ["activated" => "boolean"];

    public function setPasswordAttribute($value) {
        $this -> attributes["password"] = Hash::needsReHash($value)
            ? Hash::make($value)
            : $value;
    }

    public function scopeSearch($query, $search) {
        return $query -> where(function ($query) use ($search) {
            $query -> where("name", "like", "%{$search}%")
                -> orWhere("email", "like", "%{$search}%");
        });
    }

    public function phones() {
        return $this -> hasMany(UserPhone::class);
    }
}
