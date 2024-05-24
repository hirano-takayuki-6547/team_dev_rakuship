@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>
            <span style="color: 2f2b32; background-color: #fad7da; border-radius: 8px; padding: 4px 8px;">
                {{ session('status') }}
            </span>
        </div>
    @endif
    <div class="grid-wrapper">

        @foreach ($items as $item)
            <article class="card">
                <a href="{{ route('items.show', $item->id) }}" style="text-decoration: none; color: #000000;">
                    <div class="card__header">
                        @if (isset($item->buyer_id))
                            <figure class="card__thumbnail sold__tag">
                                <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像" class="card__image">
                            </figure>
                        @else
                            <figure class="card__thumbnail">
                                <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像" class="card__image">
                            </figure>
                        @endif
                        <h2 class="card__title">{{ $item->item_name }}</h2>
                    </div>
                </a>
            </article>
        @endforeach
    </div>
    <div class="pagination">

        {{ $items->links('pagination::bootstrap-4') }}
    </div>
@endsection
