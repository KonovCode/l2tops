<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'chronicles',
        'rates',
        'date_open',
        'status',
        'status_term',
        'premium',
        'premium_term',
        'state_project',
        'state_public',
        'website',
        'user_id',
    ];
}
