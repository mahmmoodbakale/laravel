<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'location',
        'qty',
        'description',
        'created_at',
        'updated_at'
    ];
}

