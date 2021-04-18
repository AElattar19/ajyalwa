<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = "licenses";
    protected $fillable = ['user_id', 'year', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
     