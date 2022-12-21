<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectStatisticItem extends Component
{
    public $rates;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rates)
    {
        $this->rates = $rates;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-statistic-item');
    }
}
