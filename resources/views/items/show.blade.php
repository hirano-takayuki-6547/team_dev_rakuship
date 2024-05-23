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
            <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像">
        </div>
        <div class="show-item">
            <table class="show-item-table">
                <tr class="item-name">
                    <th>商品名：</th>
                    <td>{{ $item->name }}</td>
                </tr>
                <tr class="item-category">
                    <th>カテゴリ：</th>
                    <td>{{ $item->category->name }}</td>
                </tr>
                <tr class="item-price">
                    <th>価格：</th>
                    <td>{{ $item->price }}</td>
                </tr>
                <tr class="item-name">
                    <th>商品説明：</th>
                    <td>{{ $item->description }}</td>
                </tr>
            </table>
        </div>
    </div>

    <p>
        @if ($item->seller_id == Auth::id())
            <a href="{{ route('item.edit', $item) }}">編集する</a>
            |
            <a href="" onclick="deleteitem()">削除する</a>
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
        @else
            @if (Auth::user()->isLike($item->id))
                <form action="{{ route('likes.destroy') }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button type="submit">いいね解除</button>
                </form>
            @else
                <form action="{{ route('likes.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button type="submit">いいね登録</button>
                </form>
            @endif
            @if (!isset($item->buyer_id))
            <a href="{{ route('show.buy.form', $item) }}">購入する</a>
            @endif
        @endif
    </p>

@endsection
