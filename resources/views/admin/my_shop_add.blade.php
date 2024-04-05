@extends('layouts.app')
@section('title','ショップ登録')
@section('content')
<h1>ショップ登録</h1>

<form method="POST" action="{{ route('my_shop_store') }}">
  @csrf

  <div class="form-group">
    <label for="name">ショップ名</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
  </div>

  <div class="form-group">
    <label for="description">説明</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">登録</button>

</form>

<div class="items"><a href="{{ route('my_shop_show') }}"><button type="button" class="btn btn-primary">このショップを登録する</button></a></div>

@endsection