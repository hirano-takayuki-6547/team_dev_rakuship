<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAKUSHIP</title>
</head>
<body>
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
</body>
</html>
