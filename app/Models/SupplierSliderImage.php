<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierSliderImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'image_path',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
