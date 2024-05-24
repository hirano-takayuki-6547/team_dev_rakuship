@if ($currentRouteName === 'items.index')
    <span id="search-category">
        <form action="{{ route('items.index') }}" method="get">
            @csrf
            <label for="itemCheckbox" class="check-box">
                <span>
                    <input type="checkbox" id="itemCheckbox" class="check-box-input" aria-checked="false"
                        aria-disabled="false" name="status">
                    販売中のみ表示
                </span>
            </label>

            <select class="condition" name="condition[]">
                <option value="#" disabled selected>商品ステータス</option>
                @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                @endforeach
            </select>

            <select class="category" name="category[]">
                <option value="#" disabled selected>カテゴリー</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category[]') === $category->id ?? selected }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>

            <span><input class="search-txt" type="text" name="keyword[]" value=""
                    placeholder=" 検索したいことを入力"></span>
            <button class="search-btn" type="submit">検索</button>
        </form>
    </span>
@endif
