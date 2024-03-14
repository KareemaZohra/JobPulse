<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoleMapping extends Model
{
    use HasFactory;

    protected $table = 'user_role_mapping';

    public function userRole()
    {
        return $this->hasOne(UserRole::class, 'id', 'user_role_id');
    }
}
