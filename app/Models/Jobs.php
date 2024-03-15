<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    public function candidates(){
        return $this->hasMany(JobCandidateMapping::class, 'job_id', 'id')->with('User');
    }
}
