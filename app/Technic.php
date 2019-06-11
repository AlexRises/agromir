<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technic extends Model
{
    public $timestamps = false;
    protected $table = 'technic';
    protected $primaryKey = 'technic_id';

    protected $guarded = [''];

    public function type()
    {
        return $this->hasMany(Technic_Type::class, 'technic_type_id');
    }

    public function provide()
    {
        return $this->hasMany(Provider::class, 'provider_id');
    }

    public function branches()
    {
        return $this->hasMany(Branch::class, 'branch_id');
    }
    
}
