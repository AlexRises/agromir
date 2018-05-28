<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'invoice_id';

    protected $guarded = ['*'];

    public function provide()

    {
        return $this->hasMany(Provider::class, 'provider_id');
    }
}
