<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'invoice_id';
    public $timestamps = false;

    protected $guarded = [''];

    public function provide()

    {
        return $this->hasMany(Provider::class, 'provider_id');
    }
}
