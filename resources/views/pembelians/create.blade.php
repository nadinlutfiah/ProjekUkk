<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah pasok Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Pembelian</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('pembelian.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" id="nama_produk" required>
    </div>
    <div class="form-group">
        <label for="harga_produk">harga Produk</label>
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
    <div class="form-group">
        <label for="subtotal">Subtotal</label>
        <input type="number" name="subtotal" class="form-control" id="subtotal" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
