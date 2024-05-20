@extends('layouts.app')

@section('content')

<div id="serach-category">
    <div class="search-box">
        <form action="#" method="post">
          <input class="search-txt" type="text" placeholder="検索したいことを入力">
          <button class="search-btn" type="submit">検索</button>
        </form>
    </div>

    <select class="category" onchange="location = this.value;">
        <option value="#" disabled selected>Menu</option>
        <option value="#">マイページ</option>
    </select>
</div>

@endsection
