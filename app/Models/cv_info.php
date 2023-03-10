<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'github',
        'linkedin',
        'image',
        'carrer',
        'skill_1',
        'skill_2',
        'skill_3',
        'skill_4',
        'skill_5',
        'project_1',
        'project_2',
        'project_3',
        'bsc',
        'bsc_res',
        'hsc',
        'hsc_res',
        'ssc',
        'ssc_res',



    ];
}