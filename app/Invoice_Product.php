<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice_Product extends Model
{
    protected $table = 'invoice__products';
    protected $primaryKey = 'invoice_products_id';

    protected $guarded = ['*'];

    public function invoices()

    {
        return $this->hasMany(Invoice::class, 'invoice_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
    
    public function branches()
    {
        return $this->hasMany(Branch::class, 'branch_id');
    }
}
