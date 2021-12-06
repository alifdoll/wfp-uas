<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\CartSession;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('products.listproduct', compact('product'));
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
        $data = new Product();
        
        
        
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->image = $request->get('image');
        $data->price = $request->get('price');
        $data->stock = $request->get('stock');
        $data->cpu = $request->get('cpu');
        $data->ram = $request->get('ram');
        $data->storage = $request->get('storage');
        $data->graphics = $request->get('graphics');
        $data->display = $request->get('display');
        $data->battery_capacity = $request->get('battery_capacity');
        $data->color = $request->get('color');
        $data->dimensions = $request->get('dimensions');
        $data->weight = $request->get('weight');
        $data->ports = $request->get('ports');
        $data->connectivity = $request->get('connectivity');
        $data->category_id = $request->get('category_id');
        $data->brand_id = $request->get('brand_id');

        $data->save();
        return redirect()->route('admin.product.homeProduct')->with('status', 'Data Product berhasil ditambahkan');
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
    public function update(Request $request, Product $product)
    {
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->image = $request->get('image');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->cpu = $request->get('cpu');
        $product->ram = $request->get('ram');
        $product->storage = $request->get('storage');
        $product->graphics = $request->get('graphics');
        $product->display = $request->get('display');
        $product->battery_capacity = $request->get('battery_capacity');
        $product->color = $request->get('color');
        $product->dimensions = $request->get('dimensions');
        $product->weight = $request->get('weight');
        $product->ports = $request->get('ports');
        $product->connectivity = $request->get('connectivity');
        $product->category_id = $request->get('category_id');
        $product->brand_id = $request->get('brand_id');
        
        $product->save();
        return redirect()->route('admin.product.homeProduct')->with('status', 'Data Product berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('admin.product.homeProduct')->with('delete', 'Data brand Berhasil Dihapus');
        } catch (\PDOException $e) {
            
        }
    }

    public function addToCart(Request $request, $id)
    {
        // $cart = CartSession::where("id", "")
        // $cartSession = CartSession::create(Auth::user()->id);
        // CartItem::create([
        //     "session_id"=>$cartSession->id,
        //     "product_id"=>$id,
        //     "quantity"=>$request->post('quantity')
        // ]);
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
        // return dd(Auth::user()->id);
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

    public function checkout()
    {
        $cart = session()->get('cart');
        if($cart == null)
        {
            abort(404);
        }
        else 
        {
            return view('products.checkout', compact('cart'));
        }
    }
}