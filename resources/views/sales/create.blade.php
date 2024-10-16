<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah product</h1>
        <form action="{{ route('sales.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="penjualan">Nama Produk</label>
                <input type="text" class="form-control" id="penjualan" name="penjualan" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga" required>
            </div>
            <div class="form-group">
                <label for="tanggal_penjualan">Tanggal Penjualan</label>
                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" required>
            </div>
            <div class="form-group">
                <label for="status_stock">Status Stock</label>
                <input type="text" class="form-control" id="status_stock" name="status_stock" required>
            </div>
            <div class="form-group">
                <label for="pelanggan">Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan" name="pelanggan" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
