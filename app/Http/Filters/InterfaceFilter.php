<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

interface InterfaceFilter 
{
    public function apply(Builder $builder);
}