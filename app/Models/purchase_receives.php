<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase_receives extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function purchase()
    {
        return $this->belongsTo(purchase::class, 'purchaseID', 'id');
    }
    public function product()
    {
        return $this->belongsTo(products::class, 'productID', 'id');
    }
}
