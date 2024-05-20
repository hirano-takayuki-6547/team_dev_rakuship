@extends('layouts.app')

@section('content')

<div id="serach-category">
    <select class="category" onchange="location = this.value;">
        <option value="#" disabled selected>カテゴリー</option>
        <option value="#">カテゴリー1</option>
        <option value="#">カテゴリー2</option>
        <option value="#">カテゴリー3</option>
    </select>

    <div class="search-box">
        <form action="#" method="get">
          <input class="search-txt" type="text" placeholder="検索したいことを入力">
          <button class="search-btn" type="submit">検索</button>
        </form>
    </div>
</div>

@endsection
