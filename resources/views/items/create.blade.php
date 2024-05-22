@extends('layouts.app')

@section('content')

<h1 class="create-h1">商品出品</h1>
<div class ="container-create">
    @include('commons.flash')
    <form class ="create-form" action="{{ route('item.sell') }}" method="post" enctype="multipart/form-data">
        @csrf
        <dl>
            <dt>商品画像</dt>
            <span class="image-picker">
                <input type="file" id="img_src" name="img_src" style="display: none;"
                    accept="image/png,image/jpeg,image/gif"><br>
                <label for="img_src">
                    <img src="/main/images/dummy-item.png" alt=""
                        style="object-fit; cover; width: 300px; height: 300px; cursor: pointer;">
                </label>
            </span>

            <dt>商品名<dt>
                <input type="text" name="name" value="{{ old('name') }}">

            <dt>カテゴリー</dt>
            <dd>
                <select name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </dd>

            <dt>値段</dt>
            <input type="number" name="price" value="{{ old('price') }}">
            <dt>商品説明</dt>
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
        </dl>
        <button type="submit">商品を出品する</button>
    </form>
</div>
@endsection
