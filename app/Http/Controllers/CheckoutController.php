<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public $subtotal;
    public $coursesIDs;

    public function __invoke()
    {
        // foreach (auth()->user()->pendingCourses as $course) {
        //     $this->subtotal = $this->subtotal + $course->full_price;
        //     $this->coursesIDs[] = $this->coursesIDs;
        // }

        // $order = Order::create([
        //     'user_id'           => auth()->user()->id,
        //     'subtotal_amount'   => $this->subtotal,
        //     'tax'               => null,
        //     'discount'          => null,
        //     'discount_code'     => null,
        //     'total_amount'      => $this->subtotal,
        //     'status'            => 'pending'
        // ]);

        return view('profiles.checkout');
    }
}