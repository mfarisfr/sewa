@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FORM Kerusakan Awal Mobil</h1>
</center>
<form>
    <div class="form-group">
        <label for="plat">Plat Mobil</label>
        <select id="plat" class="form-control">
            <option value="">- Pilih Plat Mobil</option>
            <option value="">AB2020AE</option>
            <option value="">BG19991ZA</option>
            <option value="">A6543OU</option>
        </select>
    </div>

    <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <input type="text" id="kondisi" class="form-control">
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection