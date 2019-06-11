<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $timestamps = false;
    protected $table = 'branch';
    protected $primaryKey = 'branch_id';

    protected $guarded = ['branch_id', 'city'];

    public function staffs()

    {
        return $this->hasMany(Staff::class, 'branch');
    }

    public function technic()

    {
        return $this->hasMany(Technic::class, 'branch');
    }

    public function invoiceproducts()

    {
        return $this->hasMany(Invoice_Product::class, 'branch');
    }

    public function plantcultures()
    {
        return $this->hasMany(Plant_Culture::class, 'branch');

    }
}
