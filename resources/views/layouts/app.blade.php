<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main/layout.css">
    <title></title>
</head>
<header>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ route('items.index') }}">
                <img src="/main/images/logo.png" alt="MyWebsite Logo">
            </a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#">TEST</a></li>
            <li class="nav-item"><a href="#">TEST</a></li>
            <li class="nav-item"><a href="{{ route('logout') }}">Logout</a></li>
            <li class="nav-item">
                <select class="dropdown" onchange="location = this.value;">
                    <option value="#" disabled selected>Menu</option>
                    <option value="{{ route('login') }}">ログイン</option>
                    <option value="{{ route('items.index') }}">商品一覧</option>
                    <option value="#">マイページ</option>
                </select>
            </li>
        </ul>
    </nav>
</header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

</body>
</html>
