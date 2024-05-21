@extends('layouts.app')

@section('content')

<div id="search-category">
    <select class="category" >
        <option value="#" disabled selected>カテゴリー</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <div class="search-box">
        <form action="{{ route('items.index') }}" method="post">
          <input class="search-txt" type="text" name="keyword" value="" placeholder="検索したいことを入力">
          <button class="search-btn" type="submit">検索</button>
        </form>
    </div>
</div>

@foreach ($items as $item)
<article class="card">
    <div class="card__header">
        <h3 class="card__title">{{ $item->name}}</h3>
        <!-- <figure class="card__thumbnail">
        <img src="https://shibajuku.net/wp/wp-content/uploads/2020/02/seigiT.jpg" alt="手書きの「正義」という文字が縦に大きくマジックで書かれている白いTシャツ" class="card__image">
        </figure> -->
    </div>
    <div class="card__body">
        <p class="card__description">ごく普通の生地の白いTシャツに油性マジックで「正義」と書いただけの架空の半袖Tシャツです。</p>
        <p class="card__category">{{ $item->category->name }}</p>
        <p class="card__price">{{ $item->name}}</p>
    </div>
    <div class="card__footer">
        <p class="card__text"><a href="{{ route('items.show', $item) }}" class="button -compact">{{ $item->name }}の詳細を見る</a></p>
    </div>
    </article>
    @endforeach
@endsection
