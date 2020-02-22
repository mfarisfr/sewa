@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
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
            <?php
            foreach ($daftarp as $p) :
                foreach ($daftarm as $a) :
                    if ($p['plat'] == $a['plat']) {
            ?>
                        <option value="<?= $a['plat']; ?>"><?= $a['plat']; ?>- <?= $a['merk_type']; ?></option>
            <?php }
                endforeach;
            endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="status"> Status:</label>
        <select name="status" class="form-control">
            <option selected>Menunggu</option>
            <option value="ditolak">Ditolak</option>
            <option value="konfirmasi kepala">Konfirmasi Kepala</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Kirim</button>
</form>
      </div>
      </div>
</div>

@endsection