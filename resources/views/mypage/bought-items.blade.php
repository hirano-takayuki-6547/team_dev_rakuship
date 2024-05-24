@extends('layouts.side')

@section('content-mypage')

@section('title', '購入商品一覧')

<div class="row">
    <div class="grid-wrapper">

    @foreach ($items as $item)
    <article class="card">
        <a href="{{ route('items.show', $item->id) }}" style="text-decoration: none; color: #000000;">
            <div class="card__header">
                <figure class="card__thumbnail">
                    <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像" class="card__image">
                </figure>
                <h2 class="card__title">{{ $item->item_name }}</h2>
            </div>
        </a>
    </article>
    @endforeach

    </div>
</div>
@endsection
