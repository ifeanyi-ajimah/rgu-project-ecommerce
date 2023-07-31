<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ExternalController extends Controller
{
    public function index()
    {
        $products = Product::take(8);
        return view('externalLayout.home',compact('products'));
    }
}
