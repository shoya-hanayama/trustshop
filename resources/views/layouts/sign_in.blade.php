@extends('layouts.app')
@section('title','ログイン画面')
@section('content')

<h1>ログイン画面</h1>

<form method="POST" action="{{ route('login') }}">
  @csrf

  <div class="form-group">
    <label for="email">メールアドレス</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  </div>

  <div class="form-group">
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
  </div>

  <div class="form-group">
    <button type="submit">ログイン</button>
  </div>

  @if (session('errors'))
  <div class="alert alert-danger">
    <ul>
      @foreach (session('errors')->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
</form>

<div class="my_shop_index"><a href="{{ route('my_shop_index') }}"><button type="button" class="btn btn-primary">Myショップ一覧
    </button></a></div>

@endsection