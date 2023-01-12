<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dialog extends Component
{
    public $component_id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->component_id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dialog');
    }
}
