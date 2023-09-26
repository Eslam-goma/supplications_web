<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplication extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function views()
    {
        return $this->hasMany(SupplicationView::class);
    }
}

