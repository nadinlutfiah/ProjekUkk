<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori Barang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tambah Kategori Barang</h2>
        <!-- HTML Form -->
        <form action="{{ route('admin_kategoris.store') }}" method="POST">
    @csrf
    <!-- Form fields -->
</form>

    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="form-group row">
    <label for="id_kategori" class="col-sm-4 col-form-label">ID Kategori:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="Masukkan ID Kategori">
    </div>
</div>

<div class="form-group row">
    <label for="nama_kategori" class="col-sm-4 col-form-label">Nama Kategoris</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Nama Kategori">
    </div>
</div>
<<form action="{{ route('admin_kategoris.store') }}" method="POST">
    @csrf
    <input type="text" name="id_kategori" placeholder="Enter ID Kategori">
    <input type="text" name="nama_kategori" placeholder="Enter Kategori Name">
    <button type="submit">Submit</button>
</form>

                </div>
            </div>
        </div>
    </div>
</form>
