<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompanyMapping extends Model
{
    use HasFactory;

    protected $table = 'user_company_mapping';

    public function employee(){
        return $this->hasOne(User::class, 'id', 'employee_id');
    }
}
