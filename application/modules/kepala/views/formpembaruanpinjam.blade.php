@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Update Peminjaman</h1>
</center>
<form method="POST" action="{{base_url('kepala/perbaruipinjam')}}">
    <div class="form-group">
        <label for="id_pinjam"> Id :</label>
        <select name="id_pinjam" class="form-control">
                <option value="<?= $pin['id_pinjam']; ?>"><?= $pin['id_pinjam']; ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="plat"> Plat Mobil:</label>
        <select name="plat" class="form-control">
                <option value="<?= $pin['plat']; ?>"><?= $pin['plat']; ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="km_awal"> KM Awal:</label>
        <input type="number" class="form-control" name="km_awal">
    </div>
    <div class="form-group">
        <label for="km_akhir"> KM Akhir:</label>
        <input type="number" class="form-control" name="km_akhir">
    </div>
    <div class="form-group">
        <label for="kondisi_akhir"> Kondisi Akhir:</label>
        <input type="text" class="form-control" name="kondisi_akhir">
    </div>
    <div class="form-group">
        <label for="status"> Status:</label>
        <select name="status" class="form-control">
            <option selected>-------</option> 
            <option value="dipinjam">Dipinjam</option>
            <option value="kembali">Kembali</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default" name="perbarui">Update</button>
</form>
@endsection