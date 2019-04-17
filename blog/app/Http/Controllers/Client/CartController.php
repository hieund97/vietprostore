<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        return view('client.cart.index');
    }

    public function checkout(){
        return view('client.checkout.index');
    }

    public function complete(){
        return view('client.checkout.complete');
    }
}
