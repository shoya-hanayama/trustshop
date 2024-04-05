@extends('layouts.app')
@section('title','Myショップ一覧')
@section('content')

<h1>Myショップ一覧 画面</h1>

<div>
  <h1>会員情報</h1>
  <p><strong>名前:</strong> {{ $user->name }}</p>
  <p><strong>Email:</strong> {{ $user->email }}</p>
</div>
@if (isset($shops))
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>ショップ名</th>
      <th>説明</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shops as $shop)
    <tr>
      <td>{{ $shop->id }}</td>
      <td><a href="{{ route('my_shop_show', $shop->id) }}">{{ $shop->name }}</a></td>
      <td>{{ $shop->description }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<div class="alert alert-info">ショップがありません</div>
@endif

<div class="my_shop_add"><a href="{{ route('my_shop_add') }}"><button type="button" class="btn btn-danger">ショップ登録</button></a></div>

@endsection