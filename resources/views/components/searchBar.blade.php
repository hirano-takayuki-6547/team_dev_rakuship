@if ($currentRouteName === 'items.index')
    <span id="search-category">
        <form action="{{ route('items.index') }}" method="get">
            @csrf
            <label for="" class="checkbox">
                <input type="checkbox" class="itemCheckbox" aria-checked="false" aria-disabled="false">
                <div class="label-container">
                    <div class="label-compo">
                        <span class="label-text">販売中のみ表示</span>
                    </div>
                </div>
            </label>

            <select class="condition">
                <option value="#" disabled selected>商品ステータス</option>
                @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                @endforeach
            </select>

            <select class="category">
                <option value="#" disabled selected>カテゴリー</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <span><input class="search-txt" type="text" name="keyword" value="" placeholder=" 検索したいことを入力"></span>
            <button class="search-btn" type="submit">検索</button>
        </form>
    </span>
@endif
