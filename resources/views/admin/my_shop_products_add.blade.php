@extends('layouts.app')
@section('title', '商品登録')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">商品登録</div>

        <div class="card-body">
          <form action="{{ route('products.store') }}" method="post">
            @csrf
            <input type="hidden" name="shop_id" value="{{ $shop_id }}">
            <div class="form-group">
              <label for="name">商品名</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="description">説明</label>
              <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
              <label for="price">価格</label>
              <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
              <label for="stock">在庫数</label>
              <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="items mt-3"><a href="{{ route('my_shop_show', ['id' => $shop_id]) }}"><button type="button" class="btn btn-primary">戻る</button></a></div>

@endsection