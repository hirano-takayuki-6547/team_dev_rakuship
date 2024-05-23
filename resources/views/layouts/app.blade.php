<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/main/layout.css">
    <link rel="stylesheet" href="/main/item-buy-form.css">
    <script src="https://kit.fontawesome.com/1d8e0db496.js" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
    <title>{{ config('app.name') }}</title>
    @stack('styles')
</head>
<header>

    <body>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="{{ route('items.index') }}">
                    <img src="/main/images/logo.png" alt="MyWebsite Logo">
                </a>
            </div>
            @if (Auth::user())
                <ul class="navbar-nav">
                    <x-searchBar></x-searchBar>

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
                    <x-searchBar></x-searchBar>

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
