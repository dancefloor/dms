<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Style;

class WelcomeController extends Controller
{
    public function __invoke()
    {       
        if ( request()->style ) {            
            $courses = Course::with('styles')->whereHas('styles', function($query){
                $query->where('style_id', request()->style);
            })->get();            
        }else{
            $courses = Course::all();
        }
        return view('welcome')->with([
            'courses'   => $courses,            
        ]);
    }
}
