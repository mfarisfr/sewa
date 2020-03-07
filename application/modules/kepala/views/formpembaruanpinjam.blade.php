@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Update Peminjaman</h1>
</center>
<div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
<form method="POST" action="{{base_url('kepala/perbaruipinjam')}}">
    <div class="form-group">
        <label for="id_pinjam"> Id :</label>
        <!-- <select name="id_pinjam" class="form-control">
                <option value="<?= $pin['id_pinjam']; ?>"><?= $pin['id_pinjam']; ?></option>
        </select> -->
        <input type="number" class="form-control" name="id_pinjam" placeholder="<?= $pin['id_pinjam'] ?>" value="<?= $pin['id_pinjam'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="plat"> Plat Mobil:</label>
        <!-- <select name="plat" class="form-control">
                <option value="<?= $pin['plat']; ?>"><?= $pin['plat']; ?></option>
        </select> -->
        <input type="name" class="form-control" name="plat" placeholder="<?= $pin['plat'] ?>" value="<?= $pin['plat'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="km_awal"> KM Awal:</label>
        <input type="number" class="form-control" name="km_awal" placeholder="<?= $pin['km_awal'] ?>" value="<?= $pin['km_awal'] ?>">
    </div>
    <div class="form-group">
        <label for="km_akhir"> KM Akhir:</label>
        <input type="number" class="form-control" name="km_akhir">
    </div>
    <div class="form-group">
        <label for="kondisi_awal"> Kondisi Awal:</label>
        <textarea name="kondisi_awal" cols="40" rows="5" class="form-control" readonly><?= $pin['kerusakana_awal']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="kondisi_akhir"> Kondisi Akhir:</label>
        <textarea name="kondisi_akhir" cols="40" rows="5" class="form-control" ></textarea>
    </div>
    <div class="form-group">
        <label for="status"> Status:</label>
        <select name="status" class="form-control">
            <option value="konfirmasi direktur">Konfirmasi Direktur</option> 
            <option value="dipinjam">Dipinjam</option>
            <option value="kembali">Kembali</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="perbarui">Update</button>
</form>
      </div>
      </div>
</div>

@endsection