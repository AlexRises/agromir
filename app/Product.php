<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $guarded = ['*'];

    public function invoiceproducts()
    {
        return $this->hasMany(Invoice_Product::class, 'product');
    }

    public function plantculture()
    {
        return $this->belongsToMany(Plant_Culture::class, 'product__plant__cultures', 'product_id', 'plant_culture_id');
    }
    
}
