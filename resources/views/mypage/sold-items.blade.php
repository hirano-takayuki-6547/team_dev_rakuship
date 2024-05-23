@extends('layouts.side')

@section('content-mypage')
    <h3>出品一覧</h3>
    @foreach ($items as $item)
        <div class="sold-item">
            <a href="{{ route('items.show', $item->id) }}" style="text-decoration: none; color: #000000;">
                <div class="sold-item">
                    <img src="/storage/item_images/{{ $item->img_src }}" alt="商品画像"
                        style="object-fit: cover; width: 200px; height: 200px;">
                    <h2>{{ $item->name }}</h2>
                </div>
            </a>
        </div>
    @endforeach
@endsection
