@extends('layouts.app')
@section('title','商品編集/削除')
@section('content')

<div class="container">
  <h1 class="my-4">商品編集/削除</h1>

  <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">商品名</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
      <label for="description">概要</label>
      <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="stock">在庫</label>
      <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
    </div>
    <button type="submit" class="btn btn-primary">更新</button>
  </form>
</div>

@endsection