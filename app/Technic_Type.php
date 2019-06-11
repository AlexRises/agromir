<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technic_Type extends Model
{
    protected $table = 'technic_type';
    public $timestamps = false;
    protected $primaryKey = 'technic_type_id';

    protected $guarded = [''];

    public function technic()
    {
        
        return $this->hasMany(Technic::class, 'type_id');
    }
}
