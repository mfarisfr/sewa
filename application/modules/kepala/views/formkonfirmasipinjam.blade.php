@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<form method="POST" action="{{base_url('kepala/konfirmpinjam')}}">
    <div class="form-group">
        <label for="id_pinjam_kar"> Id :</label>
        <select name="id_pinjam_kar" class="form-control">
            <option value="<?= $id_pinjam_kar ?>"><?= $id_pinjam_kar ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="plat"> Plat Mobil:</label>
        <select name="plat" class="form-control">
            <option selected>Pilih</option>
            <?php foreach ($daftarm as $a) :
            ?>
                <option value="<?= $a['plat']; ?>"><?= $a['plat']; ?>- <?= $a['merk_type']; ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label for="status"> Status:</label>
        <select name="status" class="form-control">
            <option selected>Menunggu</option>
            <option value="0">Ditolak</option>
            <option value="2">Konfirmasi Kepala</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Kirim</button>
</form>
@endsection