<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Transaksi</h1>
        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- form fields -->
</form>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" step="0.01" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" step="0.01" class="form-control" id="total" name="total" required>
            </div>
            <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Field input lainnya -->
    <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

        </form>
    </div>
</body>
</html>
