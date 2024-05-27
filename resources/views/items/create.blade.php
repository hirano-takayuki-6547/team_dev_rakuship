@extends('layouts.app')

@section('content')
    <h1 class="create-h1">商品出品</h1>
    @if (session('status'))
        <div>
            <span
                style="margin-left: 200px; color: 2f2b32; background-color: #d1e7dd; border-radius: 8px; padding: 4px 8px;">
                {{ session('status') }}
            </span>
        </div>
    @endif
    <div class ="container-create">
        @include('commons.flash')
        <form class ="create-form" action="{{ route('item.sell') }}" method="post" enctype="multipart/form-data">
            @csrf
            <dl>
                <dt>商品画像</dt>
                <span class="image-picker">
                    <input type="file" id="img_src" name="img_src" style="display: none;" accept="image/png"><br>
                    <label for="img_src">
                        <img src="/main/images/dummy-item.png" alt=""
                            style="object-fit; cover; width: 300px; height: 300px; cursor: pointer;">
                    </label>
                </span>

                <dt>商品名
                <dt>
                    <input type="text" name="item_name" value="{{ old('item_name') }}" placeholder="商品名を入力してください。">

                <dt>カテゴリー</dt>
                <dd>
                    <select name="category">
                        <option value="">未選択</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old($category->id) == $category->id ? " selected" : "" }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </dd>

                <dt>商品状態</dt>
                <dd>
                    <select name="condition">
                        <option value="">未選択</option>
                        @foreach ($conditions as $condition)
                            <option value="{{ $condition->id }}" {{ old($condition->id) == $condition->id ? " selected" : "" }}>{{ $condition->name }}</option>
                        @endforeach
                    </select>
                </dd>

                <dt>商品価格</dt>
                <input type="number" name="price" value="{{ old('price') }}" placeholder="価格を入力してください。">
                <dt>商品説明</dt>
                <textarea name="description" rows="5" placeholder="商品の説明入力してください。">{{ old('description') }}</textarea>
            </dl>
            <button type="submit">商品を出品する</button>
        </form>
    </div>
@endsection
