<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genre Buku</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>

    @foreach ($genres as $genre)
    <ul>
        <li><strong>{{ $genre['id'] }} - {{ $genre['name'] }}</strong> - {{ $genre['description'] }}</li>
    </ul>
    @endforeach
    
</body>
</html>
