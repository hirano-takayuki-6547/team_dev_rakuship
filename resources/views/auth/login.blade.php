<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/main/login-signup.css">
    <title>ログイン</title>
</head>
<body>
    <div class="login-wrapper">
        <h2>Rakuship.</h2>
        <h2>ログイン</h2>
        @include('commons.flash')
        <form action="{{ route('login') }}" method="post" id="login-form">
            @csrf
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="ログイン">
        <a href="{{ route('register') }}" id="signup-link">会員登録</a>
        <a href="{{ route('items.index') }}" id="signup-link">戻る</a>
    </div>
</body>
</html>
