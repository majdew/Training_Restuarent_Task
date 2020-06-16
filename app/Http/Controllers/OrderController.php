<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::paginate(5);
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $order = new Order($request->all());

        $price = $order->product->price;
        $quantity = $order->ordered_quantity;
        $total = $price * $quantity;

        $user = auth()->user();

        // orders() deals with relation function , orders deals with collection of function
        $user->orders()->save($order);
        return redirect()->route("orders.index")->with("Order created Sucessfully !") ;
                        
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Https\Response
     */
    public function show($id)
    {
        //

        $order = Order::find($id);
        return view('orders.show', compact( 'order'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::all();
        $order = Order::find($id);

        return view('orders.edit', compact('products', 'order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $order = Order::find($id);
        $order->update($request->all());
        return redirect()
                        ->route('orders.index')
                        ->with('success', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $order = Order::find($id);

        $order->delete();
        return redirect()->back()->with('success', 'Deleted successfully!');
    }

    public function myorders()
    {
        $user = Auth::user();
        $user_orders = $user->orders;
        return view('myorders', compact('user_orders', "user"));
    }
    public function orderProduct()
    {
        $products = Product::all();
        return view('orderitem', compact('products'));
    }

}
