<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public static function isCeo()
    {
        if ($user = auth()->user())
        {
            if ($user->role->display_name === 'Chief Operational Officer')
                return true;

        }
        else
        {
            return false;
        }
    }

    public static function isVice()
    {
        if($user =auth()->user())
        {
            if($user->role->display_name === 'Vice Operational Officer')
                return true;
        }

        else
        {
        return false;
        }
    }
    public static function isAcc()
    {
        if ($user = auth()->user())
        {
            if ($user->role->display_name === 'Chief Accountant')
                return true;
        }
        else
        {
            return false;
        }
    }
    public static function isAgr()
    {
        if ($user = auth()->user())
        {
            if ($user->role->display_name === 'Chief Agronomist')
                return true;
        }
        else
        {
            return false;
        }
    }

}
