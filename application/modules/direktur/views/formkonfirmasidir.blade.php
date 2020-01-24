@layout('template/main/direktur/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<form method="POST" action="{{base_url('direktur/konfirmpinjamdir')}}">
    <div class="form-group">
        <label for="id_pinjam"> Id :</label>
        <select name="id_pinjam" class="form-control">
            <option value="<?= $id_pinjam ?>"><?= $id_pinjam ?></option>
        </select>
    </div>
    <div class="form-group">
        <label for="status"> Status:</label>
        <select name="status" class="form-control">
            <option selected>Konfirmasi Kepala</option>
            <option value="ditolak">Ditolak</option>
            <option value="konfirmasi direktur">Konfirmasi Direktur</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Kirim</button>
</form>
@endsection