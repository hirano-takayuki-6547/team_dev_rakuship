<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="#" id="signup-link">戻る</a>
    </div>
</body>
</html>
