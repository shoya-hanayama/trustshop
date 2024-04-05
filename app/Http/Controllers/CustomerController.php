<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('customer.index', compact('shops'));
    }
}
