@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<form method="POST" action="{{base_url('kepala/peminjaman')}}">
    <div class="form-group">
        <label for="id_pinjam_kar"> Id :</label>
        <input type="number" name="id_pinjam_kar" class="form-control" placeholder="<?= $id_pinjam_kar ?>" readonly>
    </div>
    <div class="form-group">
        <label for="plat"> Plat Mobil:</label>
        <select name="plat" class="form-control">
        <?php foreach ($daftarm as $a) :
                ?>
            <option value="<?= $a['plat']; ?>"><?= $a['plat'];?>- <?= $a['merk_type'];?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="km_awal"> KM Awal:</label>
        <input type="number" name="km_awal" class="form-control" placeholder="KM Awal">
    </div>
    <div class="form-group">
        <label for="km_akhir"> KM Akhir:</label>
        <input type="number" name="km_akhir" class="form-control" placeholder="KM Akhir">
    </div>
    <div class="form-group">
        <label for="kondisi_awal"> Kondisi Awal:</label>
        <input type="text" name="kondisi_awal" class="form-control" placeholder="Kondisi Awal" readonly>
    </div>
    <div class="form-group">
        <label for="kondisi_akhir"> Kondisi Akhir:</label>
        <input type="text" name="kondisi_akhir" class="form-control" placeholder="Kondisi Akhir">
    </div>
    <div class="form-group">
        <label for="status"> Status:</label>
        <select name="status" class="form-control">
            <option value="1">Menunggu</option>
            <option value="0">Ditolak</option>
            <option value="2">Konfirmasi Kepala</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Kirim</button>
</form>
@endsection