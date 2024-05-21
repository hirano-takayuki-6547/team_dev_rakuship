@extends('layouts.app')

@section('content')

<div>
    <img src="" alt="商品画像">
</div>
<h3>商品名：{{ $item->name }}</h3>
<h4>カテゴリ：{{ $item->category->name }}</h4>
<p>価格：{{ $item->price }}円</p>
<p>商品説明：{{ $item->description }}</p>
<p>
    @if ($item->user_id == Auth::id())
        <a href="{{ route('item.edit', $item) }}">編集する</a>
        |
        <a href="" onclick="deleteitem()">削除する</a>
        <form action="{{ route('item.destroy', $item)}}" method="post" id="delete-form" novalidate>
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
        @if (Auth::user()->isLike($item->id)) {
            <form action="{{ route('likes.destroy') }}" method="post" novalidate>
             @csrf
             <input type="hidden" name="book_id" value="{{ $book->id }}">
             <button type="submit">いいね解除</button>
            </form>
        @else
            <form action="{{ route('likes.store') }}" method="post" novalidate>
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <button type="submit">お気に入り登録</button>
            </form>
        @endif
    @endif
    }
</p>

@endsection
