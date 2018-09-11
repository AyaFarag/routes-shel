<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'product_id','discount','ended_at'
    ];

    public function product() {
        return $this -> belongsTo(Product::class ,'product_id');
    }
}
