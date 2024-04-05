<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function my_shop_index()
  {
    $user = Auth::user(); // ログインしているユーザーを取得
    $shops = $user->shops; // ユーザーに紐づいているショップを取得

    return view('admin.my_shop_index', compact('user', 'shops'));

  }
  //
}
