<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $type;

    public $name;

    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $id)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
