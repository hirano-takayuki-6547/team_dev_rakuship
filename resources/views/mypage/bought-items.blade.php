@extends('layouts.side')

@section('content-mypage')

<h3>注文情報</h3>
<table border="1">
    <thead>
        <tr><th>ID</th><th>商品名</th><th>注文日</th></tr>

    </thead>
    <tbody>
        @foreach($items as $item)
        
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->bought_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
