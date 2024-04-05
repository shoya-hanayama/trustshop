<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{


  public function index()
  {
      $shops = Shop::all();
      return view('customer.index', compact('shops'));
  }

  // ショップ登録画面表示(my_shop_add.blade.php)ーーー
  public function create()
  {
    return view('my_shop_add');
  }


  // ショップ詳細画面表示(my_shop_show.blade.php)ーーー
  public function show($id)
  {
    $shop = Shop::findOrFail($id);
    $products = $shop->products; // ショップに紐づいている商品を取得
    return view('admin.my_shop_show', compact('shop', 'products'));
  }

// ショップ登録ーーーーーーーーーーーーーーーーーーー
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
    ]);

    $shop = new Shop();
    $shop->name = $validatedData['name'];
    $shop->description = $validatedData['description'];
    $shop->user_id = Auth::user()->id;
    $shop->save();

    return redirect()->route('my_shop_index');
  }

  // ショップ一覧表示(my_shop_index.blade.php)
  // public function index()
  // {
  //   $user = Auth::user();
  //   $shops = $user->shops; // ログイン中のユーザーに紐づくショップを取得
  //   return view('my_shop_index', compact('shops'));
  // }
}
