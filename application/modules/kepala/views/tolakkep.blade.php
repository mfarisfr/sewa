@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FRM TOLAK</h1>
</center>
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
@endsection