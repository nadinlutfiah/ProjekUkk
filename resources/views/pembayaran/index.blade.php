<!-- resources/views/pembayaran/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>transaksi</h1>
        <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Faktur</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status Pembayaran</th>
                    <th>pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pembayaran->nomor_faktur }}</td>
                        <td>{{ $pembayaran->tanggal }}</td>
                        <td>{{ $pembayaran->total }}</td>
                        <td>{{ $pembayaran->status_pembayaran }}</td>
                        <td>
                             <!-- Area untuk menampilkan total harga dan kembalian -->
        <div id="hasil-pembayaran" class="alert alert-info" style="display:none;">
            <p id="total-harga"></p>
            <p id="jumlah-bayar"></p>
            <p id="jumlah-kembalian"></p>
        </div>
                        <form id="pembayaranForm">
            <div class="form-group">
                <label for="bayar">Bayar</label>
                <input type="number" class="form-control" id="bayar" placeholder="Masukkan jumlah bayar" required>
            </div>
            <div class="form-group">
                <label for="totalharga">total harga</label>
                <input type="number" class="form-control" id="totalharga" placeholder="masukan total harga" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('pembayaranForm').addEventListener('submit', function(event) {
            event.preventDefault();  
             // Ambil nilai dari input
            //  var totalHarga = 70000;  // Contoh, total harga barang (bisa diambil dari server atau data dinamis)
             var totalHarga = document.getElementById('totalharga').value;
            var bayar = document.getElementById('bayar').value;

            // Hitung kembalian
            var kembalian =  bayar - totalHarga;

            // Tampilkan hasilnya
            document.getElementById('total-harga').textContent = "Total Harga: Rp " + totalHarga;
            document.getElementById('jumlah-bayar').textContent = "Jumlah yang Dibayar: Rp " + bayar;
            document.getElementById('jumlah-kembalian').textContent = "Kembalian: Rp " + kembalian;

            // Tampilkan div hasil pembayaran
            // document.getElemntyById('hasil-total-harga').style.display = 'block';
            document.getElementById('hasil-pembayaran').style.display = 'block';
            document.getElementById('totalharga').style.display = 'block';
        });
    </script>
</body>
</html>
                  <script>
                  function hitungKembalian(total) {
            // Ambil nilai input bayar
            var bayar = document.getElementById('bayar').value;
            var totalharga = document.getElementById('totalharga').value;

            // Hitung kembalian
            var kembalian = bayar + total;

            // Tampilkan hasil kembalian ke input kembalian
           document.getElementById('kembalian').value = kembalian;
        }
        </script>
        
                            <a href="{{ route('pembayaran.show', $pembayaran->id) }}" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data pembayaran belum tersedia.</td>
                    </tr>
                @endforelse
                <form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
                <div class="form-group">
        <label for="nomor_faktur">Nomor Faktur</label>
        <input type="text" name="nomor_faktur" class="form-control" id="nomor_faktur" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" id="tanggal" required>
    </div>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="number" name="total" class="form-control" id="total" required>
    </div>
    <button type="submit">Submit</button>
</form>

                </div>
            </tbody>
        </table>
    </div>
</body>
</html>
