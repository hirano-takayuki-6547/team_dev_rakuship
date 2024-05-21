@extends('layouts.app')

@section('content')
<h1>商品出品</h1>

<form action="{{route('item.sell')}}" method="post">
   @csrf
   <dl>
      <dt>商品名</dt>
      <dt>カテゴリー</dt>
      <dt>値段</dt>
      <dt>商品説明</dt>
   </dl>
   <button type="submit">商品を出品する</button>
</form>
@endsection
