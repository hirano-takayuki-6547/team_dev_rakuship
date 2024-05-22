<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main/layout.css">
    @vite(['resources/js/app.js'])
    <title>{{ config('app.name') }}</title>
</head>
<header>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ route('items.index') }}">
                <img src="/main/images/logo_re.png" alt="MyWebsite Logo">
            </a>
        </div>
        @if(Auth::user())
        <ul class="navbar-nav">
            <span id="search-category">
            <select class="category" >
                <option value="#" disabled selected>商品ステータス</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <select class="category" >
                <option value="#" disabled selected>カテゴリー</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <form action="{{ route('items.index') }}" method="get">
                <input class="search-txt" type="text" name="keyword" value="" placeholder="検索したいことを入力">
                <button class="search-btn" type="submit">検索</button>
            </form>
        </span>

            <li class="nav-item"><a href="#" onclick="logout()">ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
                <script>
                    function logout() {
                        event.preventDefault();
                        if (window.confirm('ログアウトしますか？')) {
                            document.getElementById('logout-form').submit();
                        }
                    }
                </script>
            </li>
            <li class="nav-item">
                <select class="dropdown" onchange="location = this.value;">
                    <option value="" disabled selected>メニュー</option>
                    <option value="{{ route('items.index') }}">商品一覧</option>
                    <option value="{{ route('item.sell') }}">出品登録</option>
                    <option value="{{ route('mypage.index') }}">マイページ</option>
                </select>
            </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <span id="search-category">
                <select class="category" >
                    <option value="#" disabled selected>商品ステータス</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <select class="category" >
                    <option value="#" disabled selected>カテゴリー</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <form action="{{ route('items.index') }}" method="get">
                    <input class="search-txt" type="text" name="keyword" value="" placeholder="検索したいことを入力">
                    <button class="search-btn" type="submit">検索</button>
                </form>
            </span>

            <li class="nav-item"><a href="{{ route('login') }}">ログイン</a></li>
            <li class="nav-item"><a href="{{ route('register') }}">新規登録</a></li>
            <li class="nav-item">
                <select class="dropdown" onchange="location = this.value;">
                    <option value="" disabled selected>メニュー</option>
                    <option value="{{ route('items.index') }}">商品一覧</option>
                    <option value="{{ route('item.showSellForm') }}">出品登録</option>
                    <option value="{{ route('mypage.index') }}">マイページ</option>
                </select>
            </li>
        </ul>
        @endif
    </nav>
</header>

    <main>
            @yield('content')
    </main>

</body>
</html>
