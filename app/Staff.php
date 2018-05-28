<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    protected $guarded = [''];
    public $timestamps = false;


    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
