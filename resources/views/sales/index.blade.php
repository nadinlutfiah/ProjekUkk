<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Barang</h1>
        <a href="{{ route('sales.create') }}" class="btn btn-success mb-3">Tambah product</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Nama produk</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Tanggal Penjualan</th>
                    <th scope="col">status stock</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <th scope="row">{{ $sale->id }}</th>
                        <td><img src="{{ asset('storage/images/' . $sale->image) }}" alt="Image {{ $sale->id }}" width="50"></td>
                        <td>{{ $sale->penjualan }}</td>
                        <td>{{ $sale->total_harga }}</td>
                        <td>{{ $sale->tanggal_penjualan }}</td>
                        <td>{{ $sale->status_stock }}</td>
                        <td>
    <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
    </form>
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
