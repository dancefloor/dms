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
            $live = Course::liveCourses()->activeCourses()->get();            
            $online = Course::onlineCourses()->activeCourses()->get();
        }


        
        return view('welcome')->with([
            'live'    => $live,
            'online'   => $online
            ]
        );
    }

    // //https://stackoverflow.com/questions/1653891/how-to-find-number-of-mondays-or-tuesdays-between-two-dates
    // /** 
    //  * Counts the number occurrences of a certain day of the week between a start and end date
    //  * The $start and $end variables must be in UTC format or you will get the wrong number 
    //  * of days  when crossing daylight savings time
    //  * @param - $day - the day of the week such as "Monday", "Tuesday"...
    //  * @param - $start - a UTC timestamp representing the start date
    //  * @param - $end - a UTC timestamp representing the end date
    //  * @return Number of occurences of $day between $start and $end
    //  */
    
    // public function countDays($day, $start, $end)
    // {
    //     //get the day of the week for start and end dates (0-6)
    //     $w = array(date('w', $start), date('w', $end));

    //     //get partial week day count
    //     if ($w[0] < $w[1]) {
    //         $partialWeekCount = ($day >= $w[0] && $day <= $w[1]);
    //     } else if ($w[0] == $w[1]) {
    //         $partialWeekCount = $w[0] == $day;
    //     } else {
    //         $partialWeekCount = ($day >= $w[0] || $day <= $w[1]);
    //     }

    //     //first count the number of complete weeks, then add 1 if $day falls in a partial week.
    //     return floor(($end - $start) / 60 / 60 / 24 / 7) + $partialWeekCount;
    // }
}
