<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Kategori Barang</h1>
        <a href="{{ route('kategoribarang.create') }}" class="btn btn-success mb-3">Tambah Kategori Barang</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">id kategori</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoris as $kategori)
                    <tr>
                        <th scope="row">{{ $kategori->id }}</th>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>{{ $kategori->deskripsi }}</td>
                        <td>
                            <a href="{{ route('kategoribarang.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kategoribarang.destroy', $kategori->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
