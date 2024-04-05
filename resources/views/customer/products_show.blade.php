@extends('layouts.app')
@section('title','商品詳細 画面')
@section('content')

<h1>商品詳細 画面</h1>
<div class="items"><a href="{{ route('purchase') }}"><button type="button" class="btn btn-primary">購入する</button></a></div>

@endsection