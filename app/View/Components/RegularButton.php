<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RegularButton extends Component
{
    public $text;
    public $model_id;
    public $button_number;
    public $element_id;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $modelId = false, $buttonNumber = '6', $elementId = false)
    {
        $this->text = $text;
        $this->model_id = $modelId;
        $this->button_number = $buttonNumber;
        $this->element_id = $elementId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.regular-button');
    }
}
