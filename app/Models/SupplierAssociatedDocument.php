<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierAssociatedDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'document_name',
        'document_path',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
