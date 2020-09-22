<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageCatalog extends Component
{
    public $courses; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courses)
    {
        $this->courses = $courses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.image-catalog');
    }
}
