<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\CheckServicesTerm;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use App\Models\Project;

class CheckStatusTerm
{
  
    public function handle(CheckServicesTerm $event)
    {
        $projects = Project::all();

        foreach($projects as $project) {

            if(Carbon::create($project->status_term)->toDateString() < Carbon::now()->toDateString()) {

                Project::findOrFail($project->id)->update(['status_term' => null, 'status' => 'default']);

            }

        }
    }
}
