<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kasir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Kasir</h1>
        <form action="{{ route('adminusers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" class="form-control" id="username" name="username" required>
          </div>
            <div class="form-group">
                <label for="level">level</label>
                <input type="text" class="form-control" id="level" name="level" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
