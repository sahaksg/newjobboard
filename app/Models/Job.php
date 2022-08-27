<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table='jobs';
    protected $fillable=[
        'title',
        'employment',
        'location',
        'deadline',
        'information',
        'responce',
        'qualif',
        'benef',
        'salary',
        'company'
    ];
}
