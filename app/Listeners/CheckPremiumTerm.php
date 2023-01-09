<?php

namespace App\Listeners;

use App\Events\CheckServicesTerm;
use Illuminate\Support\Carbon;
use App\Models\Project;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CheckPremiumTerm
{
  
    public function handle(CheckServicesTerm $event)
    {
        $projects = Project::all();

        foreach($projects as $project) {

            if(Carbon::create($project->premium_term)->toDateString() < Carbon::now()->toDateString()) {

                Project::findOrFail($project->id)->update(['premium_term' => null, 'premium' => '0']);

            }

        }

    }
}
