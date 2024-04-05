@extends('layouts.app')
@section('title','会員登録画面')
@section('content')

<h1>会員登録 画面</h1>

<form action="{{ route('sign_up') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">名前</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="email">メールアドレス</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="password">パスワード</label>
    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="password-confirmation">パスワード確認</label>
    <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
    @error('password_confirmation')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">登録</button>
</form>

@endsection