<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index()
    {   
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=> $data]);
    }

    function addToCart(Request $req)
    {
        
       if($req->session()->has('user'))
       {    
            $cart = new Cart;
            $cart -> user_id =$req->session()->get('user')['id'];
            $cart -> product_id=$req->product_id;
            $cart ->save();
            return redirect('/');
       }
       else
       {
            return redirect('/login');
       }
    }

    static function cartItem()
    {
        $userId= Session::get('user')['id'];
        //same user id count
        return Cart::where('user_id',$userId)->count();
    }

    function cartlist()
    {   
        $userId= Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')  //cart_id for remeve items
        ->get();
       
      
        return view('cartlist',['products'=> $products]);        
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function odernow()
    {   
        $userId= Session::get('user')['id'];
        $total= $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')  //cart_id for remeve items
        ->sum('products.price');
       
      
        return view('odernow',['total'=> $total]); 

    }

    function oderPlace(Request $req)
    {
        $userId= Session::get('user')['id'];
        $allCart= Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    
}
