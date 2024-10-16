<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Pembelian</h2>
                <a href="{{ route('pembelian.create') }}" class="btn btn-success mb-3">Tambah Pembelian</a>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama produk</th>
                            <th>harga produk</th>
                            <th>tanggal_pembelian</th>
                            <th>jumlah_barang</th>
                            <th>subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembelians as $pembelian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembelian->nama_produk }}</td>
                                <td>{{ $pembelian->harga_produk }}</td>
                                <td>{{ $pembelian->tanggal_pembelian }}</td>
                                <td>{{ $pembelian->jumlah_barang }}</td>
                                <td>Rp {{ number_format($pembelian->subtotal, 2) }}</td>
                                <td>
                                    <a href="{{ route('pembelian.edit', $pembelian->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <a href="{{ route('pembelian.show', $pembelian->id) }}" class="btn btn-info">Detail</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

