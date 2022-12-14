<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{

    public $route;

    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $active)
    {
        $this->route = $route;
        $this->active = $active;
    }

    public function selected() 
    {
        if($this->active === $this->route) {
            return 'active';
        }
        return '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
