<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingProduct extends Model
{
    use HasFactory;

    protected $table = 'incoming_products';
    protected $fillable = [
        'quantity',
        'product_id',
        'tanggal',
    ];

    public function product()
        {
            return $this->belongsTo(Product::class, 'product_id', 'id');
        }
}
