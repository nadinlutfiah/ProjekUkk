<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Barang</h1>
        <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
    <label for="tanggal">tanggal</label>
    <input type="date" name="tanggal" class="form-control" required>
</div>

            <div class="form-group">
                <label for="penjualan">penjualan</label>
                <input type="number" class="form-control" id="penjualan" name="penjualan" required>
            </div>
            <div class="form-group">
    <label for="pembelian">pembelian</label>
    <input type="number" class="form-control" id="pembelian" name="pembelian" required>
</div>
            <div class="form-group">
                <label for="pendapatan">pendapatan</label>
                <input type="text" class="form-control" id="pendapatan" name="pendapatan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
