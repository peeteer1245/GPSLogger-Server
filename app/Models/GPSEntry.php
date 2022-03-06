<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPSEntry extends Model
{
    use HasFactory;

    public function user()
    {
        $this->hasOne(User::class, "id", "user");
    }
}
