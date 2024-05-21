<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/main/side-menu.css">
    <link rel="stylesheet" href="/main/mypage-profile.css">

</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h1>RakuShip.</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('items.index') }}">ホームへ</a></li>
                    <li><a href="{{ route('mypage.index') }}">マイページ</a></li>
                    <li><a href="{{ route('mypage.liked-items') }}">いいね！一覧</a></li>
                    <li><a href="{{ route('mypage.bought-items') }}">購入商品一覧</a></li>
                    <li><a href="{{ route('mypage.sold-items') }}">出品商品一覧</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            @yield('content-mypage')
        </main>

    </div>
</body>
</html>
