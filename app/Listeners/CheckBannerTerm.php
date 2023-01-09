<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CheckServicesTerm;
use Illuminate\Support\Carbon;
use App\Models\VipBanner;

class CheckBannerTerm
{
  
    public function handle(CheckServicesTerm $event)
    {
        $banner = VipBanner::get()->first();

        if(isset($banner)) {
            $term = Carbon::create($banner->buy_date)->addDays($banner->buy_term)->toDateString();
            if(Carbon::now()->toDateString() > $term) {
                $banner->delete();
            }
        }
    }
}
