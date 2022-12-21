<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
            [
            'id' => $this->id,
            'title' => $this->title,
            'website' => $this->website,
            'rates' => $this->rates,
            'chronicles' => $this->chronicles,
            'date_open' => $this->date_open,
            'status' => $this->status,
            'status_term' => $this->status_term,
            'premium' => $this->premium,
            'premium_term' => $this->premium_term,
            'state_project' => $this->state_project,
            'state_public' => $this->state_public,
            'obt' => $this->obt,

            'user' => new UserResource(User::findOrFail($this->user_id)),
            ];
    }
}
