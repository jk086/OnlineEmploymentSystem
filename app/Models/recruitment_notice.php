<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruitment_notice extends Model
{
    use HasFactory;
    protected $fillable=['salary_range','career_level','job_description','requirements','job_type','qualification', 'job_specialization'];
    						
    public function recruitment_notice(){
        return $this->hasMany('App\Models\recruitment_notice');
    }
}
