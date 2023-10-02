<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'stock',
        'price',
        'supplier'
    ];

    public function incomingProducts()
    {
        return $this->hasMany(IncomingProduct::class, 'product_id');
    }
    public function exitProducts()
    {
        return $this->hasMany(ExitProduct::class, 'product_id');
    }
}
