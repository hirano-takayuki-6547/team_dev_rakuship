@if ($currentUri === '/')
    <span id="search-category">

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

        <form action="{{ route('items.index') }}" method="get">
            <input class="search-txt" type="text" name="keyword" value="" placeholder="検索したいことを入力">
            <button class="search-btn" type="submit">検索</button>
        </form>
    </span>
@endif
