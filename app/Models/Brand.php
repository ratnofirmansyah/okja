<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'brands';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'avatar',
        'url'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function category() {
        return $this->hasMany('App\Models\Category');
    }
}
