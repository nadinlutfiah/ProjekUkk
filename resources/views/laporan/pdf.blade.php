<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laporan pendapatan - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">tanggal awal</th>
                              <th scope="col">penjualan</th>
                              <th scope="col">pembelian</th>
                              <th scope="col">pengeluaran</th> <!-- Perbaiki nama kolom pengeluaran -->
                              <th scope="col">pendapatan</th>
                              <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            @forelse ($laporans as $laporans) <!-- Gunakan variabel tunggal untuk item -->
    <tr>
        <td class="text-center">
            <img src="{{ Storage::url('public/laporans/').$laporans->image }}" class="rounded" style="width: 150px">
        </td>
        <td>{{ $laporans->tanggal_awal }}</td>
        <td>{!! $laporans->penjualan !!}</td>
        <td>{!! $laporans->pembelian !!}</td>
        <td>{{ $laporans->pengeluaran }}</td> <!-- Perbaiki variabel ke 'pengeluaran' -->
        <td>{{ $laporans->pendapatan }}</td>
        <!-- <td class="text-center">
            <form action="{{ route('laporan.destroy', $laporans->id) }}" method="POST"> <!-- Gunakan $laporan sebagai variabel -->
                <!-- @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button> -->
            </form> -->
        <!-- </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center">Data Barang belum tersedia.</td>
    </tr>
@endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html> -->
