 <!--bagian yang kuubah for faris-->
 <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index3.html" class="brand-link">
         <a href="#" class="nav-link">log Out</a> -->
@layout('template/main/karyawan/main')

@section('content')
<center><h1>FORM PEMINJAMAN Mobil</h1></center>
			<form method="POST" action="{{base_url('karyawan/peminjaman')}}">
			
                <p>Silahkah melakukan pengisian data di bawah ini :</p>
		<div class="form-group">
			<label for="tgl_pinjam"> Tanggal Pinjam:</label>
			<input type="date" class="form-control" name="tgl_pinjam">
		</div>
		<div class="form-group">
			<label for="waktu_pinjam"> Waktu Pinjam:</label>
			<input type="time" class="form-control" name="waktu_pinjam" >
		</div>
        <div class="form-group">
			<label for="tgl_kembali"> Tanggal Kembali:</label>
			<input type="date" class="form-control" name="tgl_kembali" >
		</div>    
        <div class="form-group">
			<label for="waktu_kembali"> Waktu Kembali:</label>
			<input type="time" class="form-control" name="waktu_kembali">
		</div>
        <div class="form-group">
			<label for="tempat"> Tempat:</label>
			<input type="text" class="form-control" name="tempat">
		</div>
        <div class="form-group">
			<label for="acara"> Acara:</label>
			<input type="text" class="form-control" name="acara">
		</div>
		<button type="submit" class="btn btn-default" name="submit">Kirim</button>
    </form>   
@endsection 