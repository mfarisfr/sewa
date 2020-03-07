@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FORM Kerusakan Awal Mobil</h1>
</center>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <form method="POST" action="{{base_url('kepala/ker_awal')}}">
                <div class="form-group">
                    <label for="plat">Plat Mobil</label>
                    <select name="plat" class="form-control">
                        <?php foreach ($daftarm as $a) :
                        ?>
                            <option value="<?= $a['plat']; ?>"><?= $a['plat']; ?>- <?= $a['merk_type']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <textarea name="kondisi" cols="40" rows="5" class="form-control"></textarea>
                </div>

                <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection