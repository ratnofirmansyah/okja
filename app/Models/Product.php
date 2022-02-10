<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;

    protected $fillable = [
        'outlet_id',
        'category_id',
        'product_code',
        'name',
        'avatar',
        'availability',
        'price',
        'expired_date',
        'qty_balance',
        'qty_total',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function outlet() {
        return $this->belongsTo('App\Models\Outlet');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
