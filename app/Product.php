<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    protected $guarded = ['*'];

    public function invoiceproducts()
    {
        return $this->hasMany(Invoice_Product::class, 'product');
    }

    public function plantculture()
    {
        return $this->belongsToMany(Plant_Culture::class, 'product_plant_culture', 'product_id', 'plant_culture_id');
    }
    
}
