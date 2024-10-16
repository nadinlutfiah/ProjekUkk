<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data pelanggan - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('pelanggan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH data</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">nama</th>
                              <th scope="col">email</th>
                              <th scope="col">telepon</th>
                              <th scope="col">alamat</th>
                              <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
@forelse ($pelanggans as $item)
    <tr>
        <td class="text-center">
            <!-- <img src="{{ Storage::url('public/pasok/').$item->image }}" class="rounded" style="width: 150px"> -->
        </td>
        <td>{{ $item->nama }}</td>
        <td>{!! $item->email !!}</td>
        <td>{!! $item->telepon !!}</td>
        <td>{{ $item->alamat }}</td>
        <td class="text-center">
            <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>

        </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center">Data pasok barang belum tersedia.</td>
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
</html>
