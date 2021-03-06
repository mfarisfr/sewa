@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Pembaruan Pajak Mobil</h1>
</center>
<h3>Silahkan input data pembaruan pajak :</h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <form method="POST" action="{{base_url('kepala/editpajak')}}">
                <div class="form-group">
                    <label for="id_pajak">No Pajak</label>
                    <input type="number" name="id_pajak" class="form-control" placeholder="<?= $paj['id_pajak']; ?>" value="<?= $paj['id_pajak']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="plat">Plat Mobil</label>
                    <input type="number" name="plat" class="form-control" placeholder="<?= $paj['plat']; ?>" value="<?= $paj['plat']; ?>" readonly>

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
        </div>
    </div>
</div>

@endsection