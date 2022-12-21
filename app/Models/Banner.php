<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = 
    [
            'name_project',
            'project_url',
            'path_img',
            'file_name',
            'buy_term',
            'state',
            'reserved',
            'user_id',
    ];
}
