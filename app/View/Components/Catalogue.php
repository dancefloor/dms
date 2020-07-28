<?php

namespace App\View\Components;

use App\Models\Course;
use Illuminate\View\Component;

class Catalogue extends Component
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
        return view('components.catalogue');
    }
}


