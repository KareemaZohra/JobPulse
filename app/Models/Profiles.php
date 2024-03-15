<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'name',
        'nationality',
        'age',
        'LinkedinLink',
        'DegreeName',
        'university',
        'cgpa',
        'passingYear',
        'HSC',
        'college',
        'gpa',
        'HSCpassingYear',
        'companyName',
        'Designation',
        'JoiningDate',
        'LeavingDate',
        'skills',
        'user_id'
    ];
}
