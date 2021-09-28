<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Documen</title>
</head>
<body>
    <table border="1">
        <tr>
<th>namaProduk</th>
<th>harga</th>
<th>kategori</th>
<th>deskripsi</th>
<th>jumlah</th>
        </tr>
@foreach ($produk as $item)
<tr>
    <td>{{ $item->namaProduk }}</td>
    <td>{{ $item->harga }}</td>
    <td>{{ $item->kategori }}</td>
    <td>{{ $item->deskripsi }}</td>
    <td>{{ $item->jumlah }}</td>
</tr>
@endforeach
    </table>
</body>
</html>