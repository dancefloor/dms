<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\User;

class CourseCard extends Component
{
    public $course;
    public $border = 'border';
    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($course, User $user = null)
    {
        $this->course = $course;
        
        if (Auth::check()) {            
            $this->user = $user ;

            switch ($user->registrationStatus($this->course->id)) {
                case 'pre-registered':
                    $this->border = 'border-orange-500 border-2';
                    break;
                case 'waiting':
                    $this->border = 'border-blue-600 border-2';
                    break;
                case 'registered':
                    $this->border = 'border-green-600 border-2';
                    break;
                case 'standby':
                    $this->border = 'border-pink-600 border-2';
                    break;
                case 'expired':
                    $this->border = 'border-gray-800 border-2';
                    break;
                case 'open':
                    $this->border = 'border-green-200 border-2';
                    break;
                case 'partial':
                    $this->border = 'border-green-400 border-2';
                    break;
                default:
                    $this->border = 'border';
                    break;
            }
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.course-card');
    }
}



