@extends('layouts.app')

@section('content')

<div id="search-category">
    <select class="category" >
        <option value="#" disabled selected>カテゴリー</option>
        <option value="#">カテゴリー1</option>
        <option value="#">カテゴリー2</option>
        <option value="#">カテゴリー3</option>
    </select>

    <div class="search-box">
        <form action="{{ route('items.index') }}" method="post">
          <input class="search-txt" type="text" name="keyword" value="" placeholder="検索したいことを入力">
          <button class="search-btn" type="submit">検索</button>
        </form>
    </div>
</div>

<h1>
    商品一覧
</h1>

@endsection
