<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop_Rotation extends Model
{
    public $timestamps = false;
    protected $table = 'crop_rotation';
    protected $primaryKey = 'crop_rot_id';

    public function cropbranch()

    {
        return $this->hasMany(Branch::class, 'branch_id');
    }
}
