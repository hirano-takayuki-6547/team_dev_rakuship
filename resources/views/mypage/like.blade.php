<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAKUSHIP</title>
</head>
<body>
    @foreach($likes as $like)
    <tr>
        <td>{{ $like->id }}</td>
        <td>{{ $like->name }}</td>
        <td>{{ $like->updated_at }}</td>
    </tr>
@endforeach
</body>
</html>
