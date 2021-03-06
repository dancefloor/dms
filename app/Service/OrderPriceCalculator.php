<?php

namespace App\Service;

use App\Models\Course;
use App\User;
use Fideloper\Proxy\TrustProxies;

class OrderPriceCalculator
{

    public static function getSubtotal($user_id, $registrations)
    {
        $subtotal = 0;

        $user = User::find($user_id);                
        foreach ($registrations as $item) {
            
            $course = Course::findOrFail($item->id);     
            $subtotal = $subtotal + $course->full_price;       
            // if ($user->useReduced()) {$subtotal = $subtotal + $course->reduced_price;} 
            // else { $subtotal = $subtotal + $course->full_price;}
        }
        
        return number_format($subtotal, 2, '.', ',');
    }

    public static function getTotal($subtotal, $discount, $commission)
    {
        // https://laracasts.com/discuss/channels/general-discussion/number-to-2-decimal-placed-blade
        
        //return number_format($subtotal - $discount + $commission, 2, '.', ',');
        return number_format($subtotal, 2, '.', ',');
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
                return number_format($subtotal * $two_courses_discount, 2, '.', ',');
                break;
            case 3:
                return number_format($subtotal * $three_courses_discount, 2, '.', ',');
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
                return number_format($subtotal * 0.034, 2, '.', ',');
                break;
            default:
                return 0;
                break;
        }
    }

    public static function getTitle($registrations)
    {
        $title = [];                
        foreach ($registrations as $item) {
            $course = Course::findOrFail($item->id);
            $title[] = $course->name;            
        }
        return implode(' + ' , $title);
    }
}
