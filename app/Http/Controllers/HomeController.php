<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Auth::check()) {
            $product = Product::All();
            return view('home', compact('product'));
        } else {
            $user = Auth::user();
            if ($user->roles == 'administrator') {
                $product = Product::All();
                return view('homeAdmin', compact('product'));
            } else if ($user->roles == 'customer') {
                $product = Product::All();
                return view('home', compact('product'));
            }
        }
    }

    public function detail($id)
    {
        $p = Product::find($id);
       return view('products.detailproduct', compact('p'));
        
    }
}
