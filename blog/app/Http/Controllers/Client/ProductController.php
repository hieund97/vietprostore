<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    // public function detail(Product $product){
    //     return $product->name;
    // }
    
    public function shop(){
        return view('client.product.list');
    }
}
