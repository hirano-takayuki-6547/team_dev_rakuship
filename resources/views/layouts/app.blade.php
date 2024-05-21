<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main/layout.css">
    <title>{{ config('app.name') }}</title>
</head>
<header>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ route('items.index') }}">
                <img src="/main/images/logo.png" alt="MyWebsite Logo">
            </a>
        </div>
        @if(Auth::user())
        <ul class="navbar-nav">
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
                    <option value="#" disabled selected>メニュー</option>
                    <option value="{{ route('items.index') }}">商品一覧</option>
                    <option value="#">出品登録</option>
                    <option value="{{ route('mypage.index') }}">マイページ</option>
                </select>
            </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('login') }}">ログイン</a></li>
            <li class="nav-item"><a href="{{ route('register') }}">新規登録</a></li>
            <li class="nav-item">
                <select class="dropdown" onchange="location = this.value;">
                    <option value="" disabled selected>メニュー</option>
                    <option value="{{ route('items.index') }}">商品一覧</option>
                    <option value="">出品登録</option>
                    <option value="{{ route('login') }}">マイページ</option>
                </select>
            </li>
        </ul>
        @endif
    </nav>
</header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

</body>
</html>
