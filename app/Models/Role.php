<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN_ROLE_ID = 1;
    const USER_ROLE_ID = 3;

    protected $fillable = ['name','slug'];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
