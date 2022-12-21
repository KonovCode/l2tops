<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectItem extends Component
{
    public $status;
    public $premium;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status, $premium)
    {
        $this->status = $status;
        $this->premium = ($premium === '1' ? 'premium' : '');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-item');
    }
}
