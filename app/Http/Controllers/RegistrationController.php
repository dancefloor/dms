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
        
        session()->flash('success', 'You added this course to your list of courses. Please proceed to pay for this course');

        return redirect()->back();
    }
}
