<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('barang.store')}}" method="post">
    @csrf

    <label for= "namaBarang">Nama Barang</label>
    <input type="text" name="namaBarang" id="namaBarang" required>
    <br>
        
    <label for= "jenisBarang">Jenis</label>
    <input type="text" name="jenisBarang" id="jenisBarang" required>
    <br>

    <label for= "stock">Stock</label>
    <input type="text" name="stock" id="stock">
    @if ($errors->has('stock'))
        <div style="color: red;">{{ $errors->first('stock') }}</div>
    @endif
    <br>

    <label for= "status">Satus</label>
    <select name="status" id="status">
        <option value="Tersedia">Tersedia</option>
        <option value="Tidak Tersedia">Tidak Tersedia</option>
    </select>
    <br>

    <label for= "hargaSatuan">Harga</label>
    <input type="text" name="hargaSatuan" id="hargaSatuan" required>
    <br>

    <button type="submit">Tambah</button>

    </form>
</body>
</html>