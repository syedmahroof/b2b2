<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'title',
        'content',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
