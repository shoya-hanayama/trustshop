<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ShopController;
use App\Models\Shop;
use App\Models\Product;


class ProductController extends Controller
{

  public function create(Request $request)
  {
    $shop_id = $request->input('shop_id');
    return view('admin.my_shop_products_add', compact('shop_id'));
  }


  // 商品登録ーーーーーーーーーーーーーーーーーーーーーー
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|numeric',
      'stock' => 'required|integer',
      'shop_id' => 'required|exists:shops,id', // リクエストに含まれる shop_id が shops テーブルに存在することを確認
    ]);

    $product = new Product();
    $product->name = $validatedData['name'];
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->stock = $validatedData['stock'];
    $product->shop_id = $validatedData['shop_id'];
    $product->save();

    return redirect()->route('my_shop_show', ['id' => $validatedData['shop_id']])->with('success', '商品が登録されました。');
  }

  // 商品編集ーーーーーーーーーーーーーーーーーーーーー
  public function edit($id)
  {
    $product = Product::findOrFail($id);
    return view('admin.my_shop_products_edit', compact('product'));
  }

  
  public function update(Request $request, $id)
  {
    $product = Product::findOrFail($id);

    $validatedData = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|numeric',
      'stock' => 'required|integer',
    ]);

    $product->name = $validatedData['name'];
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->stock = $validatedData['stock'];
    $product->save();

    return redirect()->route('my_shop_show', ['id' => $product->shop_id])->with('success', '商品が更新されました。');
  }


  // 在庫管理ーーーーーーーーーーーーーーーーーーーーー
  public function updateStock(Request $request, Shop $shop, Product $product)
  {
    $request->validate([
      'stock' => 'required|integer|min:0',
    ]);

    $product->stock += $request->stock;
    $product->save();

    return redirect()->route('my_shop_show', $shop->id);
  }
}
