<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'name',
        'description',
        'price',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function buyers()
    {
        return $this->belongsToMany(Buyer::class, 'buyer_watchlists');
    }
}

