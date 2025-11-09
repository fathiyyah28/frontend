<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitsController extends Controller
{
    public function home()
    {
        return view('fruits.home');
    }

    public function shop()
    {
        return view('fruits.shop');
    }

    public function shopDetail($slug = null)
    {
        return view('fruits.shop-detail');
    }

    public function contact()
    {
        return view('fruits.contact');
    }

    public function cart()
    {
        return view('fruits.cart');
    }

    public function checkout()
    {
        return view('fruits.checkout');
    }

    public function testimonial()
    {
        return view('fruits.testimonial');
    }
}
