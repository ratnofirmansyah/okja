<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTransactionHistory extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'user_transaction_histories';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'user_id',
        'qty',
        'note'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
