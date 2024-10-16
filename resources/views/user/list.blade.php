<!-- resources/views/books/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Buku</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Tahun Penerbit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <th scope="row">{{ $book['id'] }}</th>
                        <td><img src="{{ asset($book['image']) }}" alt="Image {{ $book['id'] }}" width="50"></td>
                        <td>{{ $book['title'] }}</td>
                        <td>{{ $book['author'] }}</td>
                        <td>{{ $book['year'] }}</td>
                        <td><button type="button" class="btn btn-primary">Detail</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
