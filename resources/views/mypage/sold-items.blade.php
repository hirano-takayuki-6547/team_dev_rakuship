@extends('layouts.side')

@section('content-mypage')
<h3>出品一覧</h3>
<table border="1">
    <thead>
        <tr><th>ID</th><th>商品名</th><th>注文日</th><th></th></tr>

    </thead>
    <tbody>
        @foreach($items as $item)

            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->updated_at }}</td>
                <td><a href="{{ route('items.show', $item)}}">詳細</a></td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
