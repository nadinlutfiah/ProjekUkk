<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Barang</h1>
        <form action="{{ route('sales.update', $sale->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="penjualan">Nama Produk</label>
                <input type="text" class="form-control" id="penjualan" name="penjualan" value="{{ $sale->penjualan }}" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $sale->total_harga }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_penjualan">Tanggal Penjualan</label>
                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ $sale->tanggal_penjualan }}" required>
            </div>
            <div class="form-group">
                <label for="status_stock">Status Stock</label>
                <input type="text" class="form-control" id="status_stock" name="status_stock" value="{{ $sale->status_stock }}" required>
            
            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($sale->image)
                    <img src="{{ asset('storage/' . $sale->image) }}" alt="Image" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
