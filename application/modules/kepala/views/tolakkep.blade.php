@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FRM TOLAK</h1>
</center>
<div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
 <form method="POST" action="{{base_url('kepala/inserttolak')}}">
     <div class="form-group">
        <label for="status"> id</label>
        <select name="id_pinjam_kar" class="form-control">
            <option value="<?= $kar ?>"><?= $kar ?></option>
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