@extends('layouts.side')

@section('content-mypage')
<div>
<h2>お気に入り一覧</h2>
</div>
@foreach($items as $item)
        <div class="card-mypage">
            <div class="card-content">
                <h2>{{ $item->name }}</h2>
                <figure>
                    <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像">
                </figure>
                <p>{{ $item->description }}</p>
                <p>{{ $item->category->name }}</p>
                <p>{{ $item->price }}</p>
                <p>
                    <a href="{{ route('items.show', $item) }}">{{ $item->name }}の詳細を見る</a>
                </p>
            </div>
        </div>
    </div>

@endforeach

@endsection
