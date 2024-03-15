<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCandidateMapping extends Model
{
    use HasFactory;

    protected $table = 'job_candidate_mapping';

    protected $fillable = ['job_id','user_id','status'];

    public function Job(){
        return $this->hasOne(Jobs::class, 'id', 'job_id');
    }

    public function User(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
