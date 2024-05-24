@extends('layouts.app')

@section('content')
<h1 class="create-h1">商品編集</h1>
    <div class ="container-create">
        @include('commons.flash')
        <form class ="create-form" action="{{ route('item.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <dl>
                <dt>商品画像</dt>
                <dd>
                    <span class="image-picker">
                        <input type="file" id="img_src" name="img_src" style="display: none;"
                            accept="image/png,image/jpeg"><br>
                        <label for="img_src">
                            <img src="/storage/item_images/{{ $item->img_src }}" alt="" style="object-fit: cover; width: 300px; height: 300px;">
                        </label>
                    </span>
                </dd>
                <dt>商品名</dt>
                <dd>
                    <input type="text" name="item_name" value="{{ old('item_name', $item->item_name) }}" placeholder="商品名を入力してください。">
                </dd>
                <dt>商品状態</dt>
                <dd>
                    <select name="condition_id" id="">
                        <option value="">未選択</option>
                        @foreach ($conditions as $condition)
                            <option value="{{ $condition->id }}"
                                {{ $condition->id == $item->condition_id ? ' selected' : '' }}>{{ $condition->name }}
                            </option>
                        @endforeach
                    </select>
                </dd>
                <dt>カテゴリー</dt>
                <dd>
                    <select name="category_id" id="">
                        <option value="">未選択</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $item->category_id ? ' selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </dd>



                <dt>商品説明</dt>
                <dd>
                    <textarea name="description" id="" placeholder="商品の説明入力してください。">{{ old('description', $item->description) }}</textarea>
                </dd>

                <dt>商品価格</dt>
                <dd>
                    <input type="number" name="price" value="{{ old('price', $item->price) }}" placeholder="価格を入力してください。">
                </dd>
            </dl>
            <button type="submit">更新する</button>
        </form>
    </div>
@endsection
