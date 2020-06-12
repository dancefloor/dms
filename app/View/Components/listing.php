<?php

namespace App\View\Components;

use Illuminate\View\Component;

class listing extends Component
{
    public $title;
    public $add;
    public $model;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $add, $model)
    {
        $this->title = $title;
        $this->add = $add;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.listing');
    }
}
