@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FORM Kerusakan Awal Mobil</h1>
</center>
<form method="POST" action="{{base_url('kepala/ker_awal')}}">
    <div class="form-group">
        <label for="plat">Plat Mobil</label>
        <select name="plat" class="form-control">
        <?php foreach ($daftarm as $a) :
                ?>
            <option value="<?= $a['plat']; ?>"><?= $a['plat'];?>- <?= $a['merk_type'];?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <input type="text" name="kondisi" class="form-control">
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control">
    </div>

    <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection