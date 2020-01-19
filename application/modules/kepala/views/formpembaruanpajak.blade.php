@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Pembaruan Pajak Mobil</h1>
</center>
<h3>Silahkan input data pembaruan pajak :</h3>
<form method="POST" action="{{base_url('kepala/editpajak')}}">
    <div class="form-group">
        <label for="id_pajak">No Pajak</label>
        <select name="id_pajak" class="form-control">
                <option value="<?= $paj['id_pajak']; ?>"><?= $paj['id_pajak']; ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="plat">Plat Mobil</label>
        <select name="plat" class="form-control">
                <option value="<?= $paj['plat']; ?>"><?= $paj['plat']; ?></option>
        </select>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" name="harga" class="form-control" placeholder="Masukan Harga pajak">
    </div>

    <div class="form-group">
        <label for="tgl_pajak">Tanggal Pajak</label>
        <input type="date" name="tgl_pajak" class="form-control" placeholder="Masukan Tanggal berlaku pajak">
    </div>

    <div class="form-group">
        <label for="tgl_bayar">Tanggal Pembayaran</label>
        <input type="date" name="tgl_bayar" class="form-control" placeholder="Masukan Tanggal pembayaran pajak">
    </div>

    <button type="submit" name="perbarui" class="btn btn-primary">Perbarui</button>
</form>

@endsection