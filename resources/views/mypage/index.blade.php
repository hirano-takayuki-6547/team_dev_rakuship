@extends('layouts.side')

@section('content-mypage')

    <div class="profile-wrapper">
        <h1>ユーザー情報</h1>
        <h2>ようこそ、{{ $user->name }}さん</h2>
        <div class="profile">
            <form action="{{ route('mypage.index') }}" method="post">
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="username" value="{{ $user->name }}">

                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}">

                <label for="discription">自己紹介</label>
                <textarea id="discription" name="discription">{{ $user->description }}</textarea>

                <button type="submit">プロフィール更新</button>
            </form>
        </div>
    </div>

@endsection
