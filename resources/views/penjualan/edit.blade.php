<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Barang</h1>
        <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- form fields -->
</form>

            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($penjualan->image)
                    <img src="{{ asset('storage/' . $penjualan->image) }}" alt="Image" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="produk">Nama Produk</label>
                <input type="text" class="form-control" id="produk" name="produk" value="{{ $penjualan->produk }}" required>
            </div>

            <div class="form-group">
                <label for="total_harga">Harga Jual</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $penjualan->total_harga }}" required>
            </div>

            <div class="form-group">
                <label for="harga_beli">Harga Beli</label>
                <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="{{ $penjualan->harga_beli }}" required>
            </div>

            <div class="form-group">
                <label for="status_stock">Status Stock</label>
                <input type="text" class="form-control" id="status_stock" name="status_stock" value="{{ $penjualan->status_stock }}" required>
            </div>

            <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="text" class="form-control" id="diskon" name="diskon" value="{{ $penjualan->diskon }}" required>
            </div>
          
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
