<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Style;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        if (request()->style) {
            $courses = Course::with('styles')->whereHas('styles', function ($query) {
                $query->where('style_id', request()->style);
            })->get();
        } else if (request()->level) {
            switch (request()->level) {
                case 'beginner':
                    $courses = Course::where('level', 'beginner')->get();
                    break;
                case 'intermediate':
                    $courses = Course::where('level', 'intermediate')->get();
                    break;
                case 'advanced':
                    $courses = Course::where('level', 'advanced')->get();
                    break;
                case 'advanced':
                    $courses = Course::where('level', 'expert')->get();
                    break;
                case 'expert':
                    $courses = Course::where('level', 'expert')->get();
                    break;
                case 'master':
                    $courses = Course::where('level', 'master')->get();
                    break;
                default:
                    $courses = Course::where('level', 'all-levels')->get();
                    break;
            }
        } else {
            $courses = Course::all();
        }

        return view('welcome')->with([
            'courses'   => $courses,
        ]);
    }
}
