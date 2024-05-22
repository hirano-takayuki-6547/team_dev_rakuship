@extends('layouts.app')

@section('content')

<div class ="container-create">
    <form class ="create-form" action="{{ route('items.update', $item->id) }}" method="post" novalidate>
    @method('patch')
        <dl>
            <dt>カテゴリー</dt>
            <dd>
                <select name="category_id" id="">
                   <option value="">未選択</option>
                   @foreach ($categories as $category)
                        <option value="$category->id" {{ $category->id == $item->category_id ? " selected" : "" }}>{{ $item->category->name }}</option>
                    @endforeach
                </select>
            </dd>

            <dt>商品名</dt>
            <dd>
                <input type="text" name="name" value="{{ $item->name }}">
            </dd>

            <dt>商品画像</dt>
            <dd>
                <!-- 商品画像の更新わかりません -->
                <img src="" alt="">
            </dd>

            <dt>商品説明</dt>
            <dd>
                <textarea name="description" id="">{{ $item->description }}</textarea>
            </dd>

            <dt>商品価格</dt>
            <dd>
                <input type="number" name="price" value="{{ $item->price }}">円
            </dd>
        </dl>
        <button type="submit">更新する</button>
    </form>
</div>

@endsection
