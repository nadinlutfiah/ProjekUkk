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
