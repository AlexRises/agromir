<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $primaryKey = 'provider_id';
    public $timestamps = false;

    protected $guarded = [''];

    public function technic()
    {
        return $this->hasMany(Technic::class, 'provider');
    }

    public function invoice()

    {
        return $this->hasMany(Invoice::class, 'provider');
    }


}
