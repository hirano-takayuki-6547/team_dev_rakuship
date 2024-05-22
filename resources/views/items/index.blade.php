@extends('layouts.app')

@section('content')

@foreach ($items as $item)
<article class="card">
    <div class="card__header">
        <figure class="card__thumbnail">
            <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像" class="card__image">
        </figure>
        <h1 class="card__title">{{ $item->name }}</h1>
    </div>
    <div class="card__body">
        <p class="card__condition"><b>商品の状態：</b>{{ $item->itemCondition->name }}</p>
        <p class="card__category"><b>カテゴリ：</b>{{ $item->category->name }}</p>
        <p class="card__price"><b>価格：</b>{{ $item->price }}</p>
        <p class="card__description">{{ $item->description }}</p>
    </div>
    <div class="card__footer">
        <p class="card__text"><a href="{{ route('items.show', $item) }}" class="button -compact">{{ $item->name }}の詳細を見る</a></p>
    </div>
    </article>
    @endforeach

{{ $items->links(); }}
@endsection
