@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Pajak Awal Mobil</h1>
</center>
<h2>Silahkan input data pajak awal :</h2>
<form  method="POST" action="{{base_url('kepala/pajakawal')}}">
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
        <label for="harga">Harga</label>
        <input type="number" name="harga" class="form-control" placeholder="Masukan Harga pajak">
    </div>

    <div class="form-group">
        <label for="tgl_pajak">Tanggal Pajak</label>
        <input type="date" name="tgl_pajak" class="form-control" placeholder="Masukan Tanggal berlaku pajak">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

@endsection