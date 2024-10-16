<h1>Detail Penjualan</h1>
<p>Nomor Faktur: {{ $pembayaran->nomor_faktur }}</p>
<p>Tanggal: {{ $pembayaran->tanggal }}</p>
<p>Total: Rp {{ number_format($pembayaran->total, 2, ',', '.') }}</p>
<p>Status Pembayaran: {{ $pembayaran->status_pembayaran }}</p>

@if($pembayaran->status_pembayaran === 'belum_bayar')
<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <!-- Your form fields here -->
    <button type="submit">Save</button>
</form>
@endif