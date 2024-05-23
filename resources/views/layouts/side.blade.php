<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/main/side-menu.css">
    @vite(['resources/js/app.js'])
</head>
<body>

    <div class="container">
        <aside class="sidebar">
            <div class="brand-img">
                <a href="{{ route('items.index') }}">
                    <img src="/main/images/logo-re.png" alt="MyWebsite Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('items.index') }}"><i class="fa fa-home"></i> ホームへ</a></li>
                    <li><a href="{{ route('mypage.index') }}"><i class="fa fa-wpforms"></i> マイページ</a></li>
                    <li><a href="{{ route('mypage.liked-items') }}"><i class="fa fa-heart"></i> いいね！一覧</a></li>
                    <li><a href="{{ route('mypage.bought-items') }}"><i class="fa fa-cubes"></i> 購入商品一覧</a></li>
                    <li><a href="{{ route('mypage.sold-items') }}"><i class="fa fa-list"></i> 出品商品一覧</a></li>
                </ul>
            </nav>
        </aside>

        <div class="main-content">
            <h2 class="grow">@yield('title')</h2>
            @yield('content-mypage')
        </div>
    </div>

</body>
</html>
