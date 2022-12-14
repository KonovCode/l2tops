<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VipBanner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'img',
        'file_name',
        'link',
        'publish',
        'buy_term',
        'buy_date',
    ];
}
