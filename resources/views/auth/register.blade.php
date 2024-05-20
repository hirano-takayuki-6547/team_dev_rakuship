<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main/login-signup.css">
    <title>Rakuship - 会員登録</title>
</head>
<body>
    <div class="login-wrapper">
        <h2>Rakuship.</h2>
        <h2>会員登録</h2>
        @include('commons.flash')
        <form action="{{ route('register') }}" method="post" id="signup-form">
            @csrf
                <input type="text" name="name" placeholder="Username" value="{{ old('name') }}">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                <input type="submit" value="会員登録する">
        </form>
        <a href="{{ route('login') }}" id="signup-link">ログインページへ</a>
    </div>
</body>
</html>
