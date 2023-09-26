<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplicationView extends Model
{
    protected $fillable = ['supplication_id', 'user_id','count'];

    public function supplication()
    {
        return $this->belongsTo(Supplication::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Assuming a User model for authentication
    }
}
