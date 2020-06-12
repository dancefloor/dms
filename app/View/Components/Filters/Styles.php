<?php

namespace App\View\Components\Filters;

use App\Models\Style;
use Illuminate\View\Component;

class Styles extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.filters.styles', [
            'styles'=> Style::all(),
        ]);
    }
}
