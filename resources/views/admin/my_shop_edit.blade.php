@extends('layouts.app')
@section('title','ショップ編集')
@section('content')

<h1>ショップ編集</h1>
<div class="items"><a href="{{ route('my_shop_show') }}"><button type="button" class="btn btn-primary">この変更内容で更新する</button></a></div>

@endsection