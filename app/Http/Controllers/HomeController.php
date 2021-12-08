<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Product;
use App\Users;
use Exception;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Auth\User;
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

        // return dd($this->authorize('login'));
        if (!Auth::check()) {
            $product = Product::All();
            return view('home', compact('product'));
        } else {
            $user = Auth::user();
            if ($user->roles == 'administrator' || $user->roles == 'staff') {
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

    public function user()
    {
        $p = User::all();
        return view('admin.pegawai.homePegawai', compact('p'));
    }

    public function editUser($id)
    {
        $p = User::find($id);
        return view('admin.pegawai.editPegawai', compact('p'));
        // return dd($p);
    }

    public function mgproduct()
    {
        $user = Auth::user();
        if ($user->roles == 'administrator' || $user->roles == 'staff') {
            $product = Product::All();
            return view('admin.product.homeProduct', compact('product'));

            // return dd($product);
        }
    }

    public function mgproductAdd()
    {
        $p = Product::all();
        $b = Brand::all();
        $c = Category::all();
        return view('admin.product.tambahProduct', compact('p', 'b', 'c'));
    }

    public function detailAdminProduct($id)
    {
        $p = Product::find($id);
        return view('admin.product.productDetail', compact('p'));
        // return dd($p);
    }

    public function editProduct($id)
    {
        $p = Product::find($id);
        $c = Category::all();
        $b = Brand::all();
        return view('admin.product.editProduct', compact('p', 'c', 'b'));
        // return dd($p);
    }

    public function homeAdmin()
    {
        return view('homeAdmin');
    }
}
