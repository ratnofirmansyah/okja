<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
