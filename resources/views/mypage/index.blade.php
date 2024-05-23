@extends('layouts.side')

@section('content-mypage')
    @include('commons.flash')
    <div class="profile-wrapper">
        <h1>ユーザー情報</h1>
        @section('title')
        ようこそ、{{ $user->name }}さん
        @endsection
        @if (session('status'))
            <div>
                <span
                    style="color: 2f2b32; background-color: #d1e7dd; border-radius: 8px; padding: 4px 8px;">{{ session('status') }}
                </span>
            </div>
        @endif
        <div class="profile">
            <form action="{{ route('mypage.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <span class="image-picker">
                    <input type="file" id="profile_img" name="profile_img" style="display: none;"
                        accept="image/png"><br>
                    <label for="profile_img">
                        @if (!empty($user->profile_img))
                            <img src="/storage/profile_images/{{ $user->profile_img }}" alt=""
                                style="object-fit; cover; width: 300px; height: 300px; cursor: pointer;">
                        @else
                            <img src="/main/images/dummy-profile.png" alt=""
                                style="object-fit; cover; width: 300px; height: 300px; cursor: pointer;">
                        @endif
                    </label>
                </span>
                <label for="name">ユーザー名</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}">

                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}">

                <label for="description">自己紹介</label>
                <textarea id="description" name="description">{{ old('description', $user->description) }}</textarea>

                <button type="submit">プロフィール更新</button>
            </form>
        </div>
    </div>
@endsection
