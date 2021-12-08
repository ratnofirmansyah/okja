<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends \TCG\Voyager\Models\User
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'role_id', 'brand_id', 'outlet_id', 'name', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function brand() {
        return $this->belongsTo('App\Models\Brand')->withTrashed();
    }

    public function outlet() {
        return $this->belongsTo('App\Models\Outlet')->withTrashed();
    }
}
