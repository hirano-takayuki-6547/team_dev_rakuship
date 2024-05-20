<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main/layout.css">
    <title>Navigation Bar</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="#">
                <img src="/main/images/logo.png" alt="MyWebsite Logo">
            </a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#">TEST</a></li>
            <li class="nav-item"><a href="#">TEST</a></li>
            <li class="nav-item"><a href="#">TEST</a></li>
            <li class="nav-item">
                <select class="dropdown" onchange="location = this.value;">
                    <option value="#" disabled selected>Menu</option>
                    <option value="login.html">ログイン</option>
                    <option value="#">商品一覧</option>
                    <option value="#">マイページ</option>
                </select>
            </li>
        </ul>
    </nav>
</body>
</html>
