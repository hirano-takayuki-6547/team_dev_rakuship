@extends('layouts.app')

@section('content')
<h1>商品出品</h1>

<form action="{{route('items.sell')}}" method="post" enctype="multipart/form-data">
   @csrf
   <dl>
     <dt>商品名<dt>
        <input type="text" name="name" value="{{old('name')}}">
     <dt>カテゴリー</dt>
       <dd>
        <select name="" id="">
         @foreach($categories as $category)
            <option value="">{{ $category->name }}</option>
         @endforeach
        </select>
       </dd>
     <dt>値段</dt>
        <input type="number" name="price" value="{{old('price')}}">
     <dt>商品説明</dt>
        <textarea name="discription" rows="5">{{old('discription')}}</textarea>
      <dt>商品画像</dt>
      <input type="file" name="image">
      <button>アップロード</button>
   </dl>
   <button type="submit">商品を出品する</button>
</form>
@endsection
