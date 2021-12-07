<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Carbon\Carbon;
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

        $order = Order::select(
            "orders.id",
            "orders.user_id",
            "orders.created_at",
            "orders.paid_at",
            "users.id as users_id_name",
            "users.name"
        )
            ->join("users", "users.id", "=", "orders.user_id")
            ->get();
        return view('admin.transaction.homeTransaction', compact('order'));
        // return dd($order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $this->authorize('delete-permission', $order);
    }

    public function createOrder()
    {
        $cart = session()->get('cart');
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $saved = $order->save();
        foreach ($cart as $item) {
            $detail = new OrderDetail;
            $detail->order_id = $order->id;
            $detail->product_id = $item['id'];
            $detail->quantity = $item['quantity'];
            $detail->total_price = $item['quantity'] * $item['price'];
            $detail->save();
        }

        if (!$saved) {
            abort(500, 'error');
        } else {
            session()->forget('cart');
            return redirect()->route('result');
        }
    }

    public function result()
    {
        return view('products.result');
    }

    public function confirmOrder($id)
    {
        $date = Carbon::now();
        Order::where('id', $id)->update(['paid_at' => $date->toDateTimeString()]);
        return redirect()->back();
    }

    public function history(Request $request)
    {
        $id = $request->get('id');
        $order = Order::find($id);
        return response()->json(array(
            "msg" => $order
        ), 200);
    }
}
