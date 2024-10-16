<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Barang</h1>
        <form action="{{ route('kategoribarang.update', $kategoribarang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($kategoribarang->image)
                    <img src="{{ asset('storage/' . $kategoribarang->image) }}" alt="Image" width="100">
                @endif -->
            </div>

            <div class="form-group">
                <label for="id_kategori">ID Kategori</label>
                <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="{{ $kategoribarang->id_kategori }}" required>
            </div>

            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategoribarang->nama_kategori }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $kategoribarang->deskripsi }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
