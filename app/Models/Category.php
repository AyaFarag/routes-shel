<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;
    
    protected $fillable = [
        "name","parent_id",
    ];

    public function parent()
    {
        return $this->belongsTo( Category::class);
    }

    public function children()
    {
        return $this->hasMany( Category::class);
    }
    
    public function ancestors()
    {
        return $this->hasMany( Category::class);
    }
    
    public function descendants()
    {
        return $this->hasMany( Category::class);
    }


    // Node belongs to parent
    // Node has many children
    // Node has many ancestors
    // Node has many descendants
}

