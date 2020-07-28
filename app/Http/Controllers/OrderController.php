<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Service\OrderPriceCalculator;
use App\Service\RegistrationPaymentManager;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index')->with('orders', $orders);
    }
    
    /**xw
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $order = Order::create([
            'user_id'   => $request->user,
            'comments'  => $request->comments ?? null,            
            'method'    => $request->method ?? null,
            'subtotal'  => $request->subtotal ?? 0,
            'discount'  => $request->discount ?? 0,
            'total'     => $request->total ?? 0,
            'author_id' => $request->author ?? null,
            'status'    => 'open',
        ]);

        // if ($request->registrations) {
        //     foreach ($request->registrations as $r) {                
        //         //dd($r);
        //         $registration = Registration::find($r);
        //         dd($registration);
        //         $order->registrations()->save($registration);
        //         RegistrationPaymentManager::registrationToOpen($registration->id);                
        //     }
        // }
        
        if ($request->courses) {                        
            $order->courses()->attach($request->courses);            
            foreach ($request->courses as $id) {                
                $registration = Registration::where('course_id', $id)->where('user_id', $request->user)->first();
                $order->registrations()->save($registration);
                RegistrationPaymentManager::registrationToOpen($registration->id);
            }                        
            //$order->subtotal_amount = OrderPriceCalculator::getSubtotal($order->user_id, $order->courses);
            //$order->total_amount = OrderPriceCalculator::getTotal(count($request->courses), $order->subtotal,$order->method);
            //$order->status = 'open';
        }

        session()->flash('success','Order created successfully');
        
        return redirect(route('orders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        
        request()->flash('success', 'Order deleted Successfully');
        
        return redirect(route('orders.index'));
    }
}
