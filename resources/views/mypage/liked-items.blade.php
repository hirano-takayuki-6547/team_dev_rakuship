@extends('layouts.side')

@section('content-mypage')
<h3>お気に入り一覧</h3>
<table border="1">
    <thead>
        <tr><th>ID</th><th>商品名</th><th>注文日</th></tr>

    </thead>
    <tbody>
        @foreach($items as $item)

            <tr>
                <td>{{ $like->id }}</td>
                <td>{{ $like->name }}</td>
                <td>{{ $like->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
