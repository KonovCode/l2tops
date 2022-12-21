<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardBanner extends Component
{
    public $slide;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slide)
    {
        $this->slide = $slide ? "background: url('$slide')" : "background-color: rgb(31 41 55)";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-banner');
    }
}
