<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'department',
        'position',
        'gender',
        'date_of_birth',
        'date_of_joining',
        'date_of_resignation',
        'salary',
    ];
}
