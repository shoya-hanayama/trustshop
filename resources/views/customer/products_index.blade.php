@extends('layouts.app')
@section('title','商品一覧 画面')
@section('content')

<h1>商品一覧 画面</h1>
<div class="items"><a href="{{ route('items_show') }}"><button type="button" class="btn btn-primary">商品詳細</button></a></div>
<div class="items"><a href="{{ route('items_show') }}"><button type="button" class="btn btn-primary">商品詳細</button></a></div>
<div class="items"><a href="{{ route('items_show') }}"><button type="button" class="btn btn-primary">商品詳細</button></a></div>

@endsection