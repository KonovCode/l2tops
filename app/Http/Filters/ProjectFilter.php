<?php

namespace App\Http\Filters;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class ProjectFilter extends AbstractFilter
{
 
    public const RATES = 'rates';

    public const CHRONICLES = 'chronicles';

    protected function getCallbacks(): array
    {
        return [
            self::RATES => [$this, 'rates'],
            self::CHRONICLES => [$this, 'chronicles'],
        ];
    }

    public function rates(Builder $builder, $value) 
    {
        preg_match_all("/\d+/", $value, $matches);
        
        if(count($matches[0]) === 2) {
            $from = intval($matches[0][0]);
            $to = intval($matches[0][1]);
            $builder->whereBetween('rates', [$from, $to]);
        }

        return back();
    
    }

    public function chronicles(Builder $builder, $value) 
    {
        $builder->where('chronicles', $value);
    }
}