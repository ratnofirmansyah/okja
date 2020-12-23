<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outlet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'outlets';
    public $timestamps = true;

    protected $fillable = [
        'brand_id',
        'name',
        'address',
        'latitude',
        'longitude'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }
}
