<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">List Buku Perpus</h1>
    <table border="1">
        <tr>
            <th>no</th>
            <th>judul</th>
            <th>penulis</th>
            <th>cover</th>
        </tr>
        @foreach ($book as $book)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$loop->title}}</td>
            <td>{{$loop->author}}</td>
            <td><img width="100%" src="{{public_path('storage/cover_buku/'.$book->cover)}}" alt=""></td>
        </tr>
        @endforeach
    </table>
</body>
</html>