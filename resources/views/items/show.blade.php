@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div>
            <span
                style="color: 2f2b32; background-color: #d1e7dd; border-radius: 8px; padding: 4px 8px;">{{ session('message') }}
            </span>
        </div>
    @endif
    <div class="show-item-container">
        <div class="item-img-src">
            @if (isset($item->buyer_id))
                        <figure class="card__thumbnail sold__tag">
                            <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像"
                            style="object-fit: cover; width300px; height: 300px;">
                        </figure>
                        @else
                        <figure class="card__thumbnail">
                            <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像"
                            style="object-fit: cover; width300px; height: 300px;">
                        </figure>
                        @endif

        </div>

       <div class="show-item">
         <div class="item-detail">
            <span class="item-label">商品名</span>
            <span class="item-value">{{ $item->name }}</span>
         </div>
         <div class="item-detail">
            <span class="item-label">カテゴリ</span>
            <span class="item-value">{{ $item->category->name }}</span>
         </div>
         <div class="item-detail">
            <span class="item-label">価格</span>
            <span class="item-value">{{ $item->price }}</span>
         </div>
         <div class="item-detail">
            <span class="item-label">商品説明</span>
            <span class="item-value">{{ $item->description }}</span>
         </div>
       </div>
    </div>

    @if ($item->seller_id == Auth::id())
        <div class="option-store-delete">
            <a class ="store" href="{{ route('item.edit', $item->id) }}">編集する</a>

            <a class ="delete" href="" onclick="deleteitem()">削除する</a>
        <form action="{{ route('item.destroy', $item->id) }}" method="post" id="delete-form">
            @csrf
        </form>
        <script type="text/javascript">
            function deleteitem() {
                event.preventDefault();
                if (window.confirm('本当に削除しますか？')) {
                    document.getElementById('delete-form').submit();
                }
            }
        </script>
        </div>
    @else
        <div class="option-like-buy">
            @if (Auth::user()->isLike($item->id))
                <form action="{{ route('likes.destroy') }}" method="post">
                    @csrf
                    @method('delete')
                    <img src="image.svg" alt="">
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button class="like-btn" type="submit">いいね解除</button>
                </form>
            @else
                <form action="{{ route('likes.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button class="like-btn" type="submit">いいね登録</button>
                </form>
            @endif
            @if (!isset($item->buyer_id))
                <a class ="buy-item" href="{{ route('show.buy.form', $item) }}">購入する</a>
            @endif
        </div>
    @endif

@endsection
