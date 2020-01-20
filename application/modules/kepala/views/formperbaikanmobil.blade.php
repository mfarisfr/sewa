@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Form Perbaikan Mobil</h1>
</center>
<form method="POST" action="{{base_url('kepala/perbaikanmobil')}}">
    <div class="form-group">
        <label for="id_listker">No Perbaikan</label>
        <select name="id_listker" class="form-control">
                <option value="<?= $per['id_listker']; ?>"><?= $per['id_listker']; ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="plat">Plat Mobil</label>
        <select name="plat" class="form-control">
                <option value="<?= $per['plat']; ?>"><?= $per['plat']; ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="kondisi">Kondisi Yang Diperbaiki</label>
        <select name="kondisi" class="form-control">
                <option value="<?= $per['kondisi']; ?>"><?= $per['kondisi']; ?></option>
        </select>
    </div>

    <div class="form-group">
        <label for="tgl_perbaikan">Tanggal Perbaikan</label>
        <input type="date" name="tgl_perbaikan" class="form-control" placeholder="Masukan Tanggal pembayaran pajak">
    </div>

    <button type="submit" name="perbarui" class="btn btn-primary">Perbarui</button>
</form>

@endsection