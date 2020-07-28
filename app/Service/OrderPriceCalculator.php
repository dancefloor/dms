<?php

namespace App\Service;

use App\Models\Course;
use App\User;

class OrderPriceCalculator {
    
    public static function getSubtotal($user_id, $registrations)
    {
        $subtotal = 0;
        
        $user = User::find($user_id);        
        foreach ($registrations as $item) {            
            $course = Course::findOrFail($item->id);
            if ($user->useReduced()) {                                
                $subtotal = $subtotal + $course->reduced_price;
            }else{                
                $subtotal = $subtotal + $course->full_price;
            }
        }
        
        return $subtotal;
    }

    public static function getTotal($subtotal, $discount, $commission)
    {
        return $subtotal - $discount + $commission;
    }

    public static function getDiscount($count, $subtotal)
    {        
        $two_courses_discount = 0.08;
        $three_courses_discount = 0.13;
        $four_courses_discount = 0.18;

        switch ($count) {
            case 1:
                return 0;
                break;
            case 2:
                return $subtotal * $two_courses_discount;
                break;
            case 3:
                return $subtotal * $three_courses_discount;
                break;
            default:
                return $subtotal * $four_courses_discount;
                break;
        }
    }

    public static function getDiscountText($count)
    {
        switch ($count) {
            case 1:
                return '';
                break;
            case 2:
                return '8% for 2 courses';
                break;
            case 3:
                return '13% for 3 courses';
                break;
            default:
                return '18% for 4 or more courses';
                break;
        }
    }

    public static function getCommission($method, $subtotal)
    {
        switch ($method) {
            case 'credit-card':
                return 5;
                break;
            case 'paypal':
                return $subtotal * 0.034;
                break;
            default:
                return 0;
                break;
        }
    }

}