@extends('layouts.side')

@section('content-mypage')
<h3>お気に入り一覧</h3>
<table border="1">
    <thead>
        <tr><th>ID</th><th>商品名</th></tr>

    </thead>
    <tbody>
        @foreach($items as $item)

            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
