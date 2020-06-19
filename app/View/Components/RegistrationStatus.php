<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RegistrationStatus extends Component
{
    public $status;
    public $color;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        switch ($this->status) {
            case 'pending':
                $this->color = 'bg-orange-500 text-orange-100';
                $this->icon = 'pending';
                break;
            case 'waiting':
                $this->color = 'bg-blue-500 text-blue-100';
                $this->icon = 'waiting';
                break;
            case 'payed':
                $this->color = 'bg-green-500 text-green-100';
                $this->icon = 'checked';
                break;
            case 'cancelled':
                $this->color = 'bg-gray-800 text-gray-200';
                $this->icon = 'x-circle-thin';
                break;
            default:
                $this->color = 'bg-pink-500 text-pink-100';
                $this->icon = 'standby';
                break;
        }
        return view('components.registration-status');
    }
}
