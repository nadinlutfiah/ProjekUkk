<form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nomor_faktur">Nomor Faktur</label>
        <input type="text" name="nomor_faktur" value="{{ $pembayaran->nomor_faktur }}" class="form-control" id="nomor_faktur" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" value="{{ $pembayaran->tanggal }}" class="form-control" id="tanggal" required>
    </div>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="number" name="total" value="{{ $pembayaran->total }}" class="form-control" id="total" required>
    </div>
    <button type="submit">Update</button>
</form>
