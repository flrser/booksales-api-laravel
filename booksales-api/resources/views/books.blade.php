<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            vertical-align: top;
            text-align: left;
        }
        th {
            background-color: #f5f5f5;
        }
        img {
            max-width: 100px;
            height: auto;
            border-radius: 4px;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Toko BookSales!</h1>
    <h2>Daftar Buku</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Cover</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="{{ asset('storage/' . $item['cover_photo']) }}" alt="Cover {{ $item['title'] }}">
                </td>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['description'] }}</td>
                <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                <td>{{ $item['stock'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
