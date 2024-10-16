<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Barang</h1>
        <form action="{{ route('kasir.update', $kasir->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($kasir->image)
                    <img src="{{ asset('storage/' . $kasir>image) }}" alt="Image" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kasir->nama }}" required>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $kasir->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $kasir->password}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
