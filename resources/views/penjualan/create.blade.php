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
        <form action="{{ route('penjualan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="penjualan">Nama barang</label>
                <input type="text" class="form-control" id="penjualan" name="penjualan" required>
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga jual</label>
                <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
            </div>
            <div class="form-group">
    <label for="harga_beli">Harga beli</label>
    <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
</div>
            <div class="form-group">
                <label for="status_stock">Status stock</label>
                <input type="text" class="form-control" id="status_stock" name="status_stock" required>
            </div>
            <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="text" class="form-control" id="diskon" name="diskon" required>
            </div>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
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
