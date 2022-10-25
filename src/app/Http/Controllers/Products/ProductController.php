<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return view('products.index', [
            'products' => $products
        ]);
    }
    
    public function orders()
    {
        $orders = Order::get();

        return view('products.order', [
            'order' => $orders
        ]);  
        
    }

    public function contact()
    {    
        return view('products.contact');
    }
}

