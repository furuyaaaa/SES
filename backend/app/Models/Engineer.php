<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'skill',
        'experience_years',
        'self_pr',
    ];
}