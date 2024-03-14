<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCandidateMapping extends Model
{
    use HasFactory;

    protected $table = 'job_candidate_mapping';

    protected $fillable = ['job_id','user_id'];
}
