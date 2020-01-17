@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FORM Pembayaran Pajak Mobil</h1>
    <form>
        <h1>Silah input data pajak :</h1>
</center>
<div class="form-group">
    <label for="plat">Plat Mobil</label>
    <select id="plat" class="form-control">
        <option value="">- Pilih Plat Mobil</option>
        <option value="">AB2020AE</option>
        <option value="">BG19991ZA</option>
        <option value="">A6543OU</option>
    </select>
</div>

<div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" id="harga" class="form-control" placeholder="Masukan Harga pajak">
</div>

<div class="form-group">
    <label for="tgl_pajak">Tanggal Pajak</label>
    <input type="date" id="tgl_pajak" class="form-control" placeholder="Masukan Tanggal berlaku pajak">
</div>

<button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection