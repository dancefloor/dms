<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function add(Course $course)
    {                                
        $course->students()->attach(auth()->user()->id,['role'=>'student', 'status'=>'pending', 'created_at'=> now()]);
        
        session()->flash('alert', 'You have successfully pre-register. Please proceed to pay on your Dashboard');

        return redirect()->back();
    }

    public function remove(Course $course)
    {

        $course->students()->detach(auth()->user()->id);
        
        session()->flash('success', 'You have remove this class from your list successfully');

        return redirect()->back();
    }
}
