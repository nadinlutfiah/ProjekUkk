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
        <h1>Tambah Barang</h1>
        <form action="{{ route('pasok.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="supplier">Supplier</label>
        <input type="text" name="supplier" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="barang">Barang</label>
        <input type="text" name="barang" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
