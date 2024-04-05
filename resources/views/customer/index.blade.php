@extends('layouts.app')
@section('title','ショップ一覧')
@section('content')

<h1>TOP ショップ一覧 画面</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>説明</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shops as $shop)
    <tr>
      <td>{{ $shop->id }}</td>
      <td>{{ $shop->name }}</td>
      <td>{{ $shop->description }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="items"><a href="{{ route('shop_show') }}"><button type="button" class="btn btn-primary">ショップ詳細</button></a></div>
<div class="items"><a href="{{ route('shop_show') }}"><button type="button" class="btn btn-primary">ショップ詳細</button></a></div>
<div class="items"><a href="{{ route('shop_show') }}"><button type="button" class="btn btn-primary">ショップ詳細</button></a></div>

@endsection