<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h1>Edit Data pembelian</h1>
                        <form action="{{ route('pembelian.update', $pasok->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" id="nama_produk" required>
    </div>
    <div class="form-group">
        <label for="harga_produk">Harga Produk</label>
        <input type="number" name="harga_produk" class="form-control" id="harga_produk" required>
    </div>
    <div class="form-group">
        <label for="tanggal_pembelian">Tanggal Pembelian</label>
        <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" required>
    </div>
    <div class="form-group">
        <label for="jumlah_barang">jumlah_barang</label>
        <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" required>
    </div>
    </div>
    <div class="form-group">
        <label for="subtotal">subtotal</label>
        <input type="number" name="subtotal" class="form-control" id="subtotal" required>
    </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
