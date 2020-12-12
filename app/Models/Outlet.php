<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outlet extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }
}
