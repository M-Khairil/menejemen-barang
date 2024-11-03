<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <form action="{{ route('barang.update', $barang->id) }}" method="post">
        @csrf
        @method('PUT')

        <label>Nama Barang</label>
        <input type="text" name="namaBarang" value="{{ $barang->namaBarang }}" required>
        <br>

        <label>Jenis Barang</label>
        <input type="text" name="jenisBarang" value="{{ $barang->jenisBarang }}" required>
        <br>

        <label>Stock</label>
        <input type="text" name="stock" value="{{ $barang->stock }}">
        @if ($errors->has('stock'))
        <div style="color: red;">{{ $errors->first('stock') }}</div>
        @endif
        <br>

        <label>Status</label>
        <select name="status" required>
            <option value="Tersedia" {{ $barang->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="Tidak Tersedia" {{ $barang->status == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
        </select>
        <br>

        <label>Harga</label>
        <input type="text" name="hargaSatuan" value="{{ $barang->hargaSatuan }}">
        <br>

        <button type="submit">Ubah</button>
    </form>
</body>
</html>
