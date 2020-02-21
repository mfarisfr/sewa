@layout('template/main/kepala/main')

@section('content')
<center>
	<h1>FORM INPUT DATA MOBIL</h1>
</center>
<div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
<form method="POST" action="{{base_url('kepala/tambahdaftarmobil')}}">

	<p>Silahkah melakukan pengisian data di bawah ini :</p>
	<div class="form-group">
		<label for="plat"> Plat Mobil:</label>
		<input type="text" class="form-control" name="plat">
	</div>
	<div class="form-group">
		<label for="nama_pemilik"> Nama Pemilik:</label>
		<input type="text" class="form-control" name="nama_pemilik">
	</div>
	<div class="form-group">
		<label for="alamat"> Alamat:</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label for="tahun"> Tahun:</label>
		<input type="number" class="form-control" name="tahun">
	</div>
	<div class="form-group">
		<label for="merk_type"> Merk/type:</label>
		<input type="text" class="form-control" name="merk_type">
	</div>
	<div class="form-group">
		<label for="jenis_model"> Jenis/model:</label>
		<input type="text" class="form-control" name="jenis_model">
	</div>
	<div class="form-group">
		<label for="warna_kb"> Warna Kb:</label>
		<input type="text" class="form-control" name="warna_kb">
	</div>
	<div class="form-group">
		<label for="isi_silinder"> Isi Silinder:</label>
		<input type="text" class="form-control" name="isi_silinder">
	</div>
	<div class="form-group">
		<label for="no_rangka"> No Rangka:</label>
		<input type="text" class="form-control" name="no_rangka">
	</div>
	<div class="form-group">
		<label for="no_mesin"> No Mesin:</label>
		<input type="text" class="form-control" name="no_mesin">
	</div>
	<div class="form-group">
		<label for="no_bpkb"> No BPKB:</label>
		<input type="text" class="form-control" name="no_bpkb">
	</div>
	<div class="form-group">
		<label for="bahan_bakar"> Bahan Bakar:</label>
		<input type="text" class="form-control" name="bahan_bakar">
	</div>
	<div class="form-group">
		<label for="warna_tnkb"> Warna TNKB:</label>
		<input type="text" class="form-control" name="warna_tnkb">
	</div>
	<button type="submit" class="btn btn-default" name="submit">Save</button>
</form>
	  </div>
	  </div>
</div>
@endsection