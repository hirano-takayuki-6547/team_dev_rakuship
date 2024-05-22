@extends('layouts.side')

@section('content-mypage')
<h2>お気に入り一覧</h2>
<div class="linkbox">
<table border="1">
    <thead>
        <tr><th>ID</th><th>商品名</th><th></th></tr>

    </thead>

    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name}}</td>
                <td><a href="{{ route('items.show', $item)}}">詳細</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
