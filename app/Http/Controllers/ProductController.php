<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
        $p = Product::find($id);
        $cart = session()->get('cart');
        if (!isset($cart[$id])) {
            $cart[$id] = [
                "id" => $p->id,
                "image" => $p->image,
                "name" => $p->name,
                "quantity" => $request->post('quantity'),
                "price" => $p->price,

            ];
        }
        else {
            $cart[$id] ["quantity"] += $request->post('quantity');
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    public function removeFromCart($id)
    {
        $p = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product deleted from cart successfully');
    }

    public function cart()
    {
        $cart = session()->get('cart');
        return view('products.cart', compact('cart'));
    }

    public function compareView()
    {
        $product1 = Product::All();
        $product2 = Product::All();
        return view('products.compare', compact('product1', 'product2'));
    }

    public function compare(Request $request)
    {
        $id = $request->get('id');
        $product = Product::find($id);
        return response()->json(array(
            "msg" => $product
        ), 200);
    }
}
