@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FORM TOLAK</h1>
</center>
<div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
<form method="POST" action="{{base_url('direktur/inserttolak')}}">
    <div class="form-group">
        <label for="status"> id</label>
        <select name="id_pinjam" class="form-control">
            <option value="<?= $pinjam ?>"><?= $pinjam ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" class="form-control">
    </div>

    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
</form>
      </div>
      </div>
</div>
@endsection