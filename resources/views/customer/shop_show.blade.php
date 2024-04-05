@extends('layouts.app')
@section('title','ショップ詳細 画面')
@section('content')

<h1>ショップ詳細 画面</h1>
<div class="items"><a href="{{ route('items_index') }}"><button type="button" class="btn btn-primary">このショップの商品を見る</button></a></div>

@endsection