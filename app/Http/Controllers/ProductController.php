<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Session;



class ProductController extends Controller
{
    //

    function index()
    {
        $Bigdata= Product::all();
        return view('product',['products'=>$Bigdata]);
    }


    function detail($id)
    {
            $data = Product::find($id);

            return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user'))
        {
            $cart= new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');



        return "Hello";
        }
        else
        {
            return redirect('/login');
        }
    }
   static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }
    function cartlist(){
        $userId=Session::get('user')['id'];
        $product = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cart_list',['products'=>$product]);
    }

    function removeCart($id){

        cart::destroy($id);
        return redirect('cart_list');

    }

    function orderNow(){

        $userId=Session::get('user')['id'];
       $total= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userId)
        ->select('products.price')
       ->sum('products.price');

        return view('ordernow',['total'=>$total]);

    }

    function OrderPlace(Request $req){

        $userId = Session::get('user')['id'];
        $allCart= Cart::where('user_id', $userId)->get();
       foreach($allCart as $cart)
       {
            $order= new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();

       }
       $req->input();
        return redirect('/');
    }

    function MyOrders(){


        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id', $userId)
         ->get();
        return view('myorders',['orders'=>$orders]);

    }
    
}
