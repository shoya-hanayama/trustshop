@extends('layouts.app')

@section('title', 'ショップ詳細')

@section('content')
<div class="container">
  <h1 class="my-4">Myショップ詳細</h1>

  @if (isset($shop))
  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title">ショップ情報</h2>
      <p class="card-text"><strong>名前:</strong> {{ $shop->name }}</p>
      <p class="card-text"><strong>説明:</strong> {{ $shop->description }}</p>
      <a href="{{ route('my_shop_edit') }}" class="btn btn-primary">ショップ編集</a>
    </div>
  </div>
  @endif

  <h1 class="my-4">登録商品一覧</h1>

  @if (isset($products) && count($products) > 0)
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>商品名</th>
        <th>概要</th>
        <th>在庫</th>
        <th>編集</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->stock }}</td>
        <td>
        <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary">商品編集</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div class="alert alert-info">商品がありません</div>
  @endif
  <a href="{{ route('products.create', ['shop_id' => $shop->id]) }}" class="btn btn-primary">商品登録</a>

  <div class="my-4">
    <a href="{{ route('my_shop_index') }}" class="btn btn-danger">このショップを削除する</a>
  </div>
</div>
@endsection

@section('styles')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
