<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;
    protected $fillable=['name','birthdate','phone_number','email','education_level','address', 'self_evaluation','work_experiene'];
    							

}
