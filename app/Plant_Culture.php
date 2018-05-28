<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant_Culture extends Model
{
    protected $table = 'plant__cultures';
    Protected $primaryKey = 'plant_culture_id';
    
    protected $guarded = [''];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product__plant__cultures', 'product_id', 'plant_culture_id');
    }
    
    public function plantbranches()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

}
