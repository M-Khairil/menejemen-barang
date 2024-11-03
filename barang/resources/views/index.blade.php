<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>List Barang</h1>
    <a href="{{route('barang.create')}}">Create New Barang</a>
    <ul>
        <table border="2">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>     
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{$barang->namaBarang}}</td>
                    <td>{{$barang->jenisBarang}}</td>
                    <td>{{$barang->stock}}</td>
                    <td>{{$barang->status}}</td>
                    <td>{{$barang->hargaSatuan}}</td>
                    
                    <td>
                        <a href = "{{route('barang.edit', $barang->id)}}">EDIT</a>
                        <form action="{{route('barang.destroy', $barang->id)}}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>     
                @endforeach
            </tbody>
        </table>
    </ul>
</body>
</html>