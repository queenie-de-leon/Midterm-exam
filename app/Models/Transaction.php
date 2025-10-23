<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // table name is transactions
    protected $fillable = ['product_id','transaction_type','quantity','remarks','transacted_at'];
    protected $casts = [
        'transacted_at' => 'datetime',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
