@layout('template/main/karyawan/main')

@section('content')
         
<?php foreach ($daftarp as $dp) :?>

     <?php $id = $dp['id_pinjam_kar']; ?>        

    <p>Saya yang bertanda tangan di bawah ini : </p>     
 	<?php
        echo "Nama      : ". $dp['nama']. "<br>";
        echo "Jabatan	: ". $dp['nama_jabatan']. "<br>";
        echo "Divisi	: ". $dp['nama_disvisi']. "<br>";?>
    <p>Dengan ini saya memohon untuk meminjam kendaraan mobil untuk keperluan kegiatan yang akan dilaksanakan pada :</p>
    <?php
        echo "Tanggal Pinjam	: ". $dp['tgl_pinjam']. "<br>";
        echo "Waktu Pinjam      : ". $dp['waktu_pinjam']. "<br>";
        echo "Tanggal Kembali	: ". $dp['tgl_kembali']. "<br>";
        echo "Waktu Kembali     : ". $dp['waktu_kembali']. "<br>";
        echo "Tempat	        : ". $dp['tempat']. "<br>";
        echo "Acara 	        : ". $dp['acara']. "<br>";
        echo "Plat  	        : ". $dp['plat']. "<br>";
        echo "Merk/type	        : ". $dp['merk_type']. "<br>";
        ?>
        <img src="<?php echo base_url() ?>/assets/dist/img/ttdfix.jpg" alt="ttd">
           
        <?php 
        endforeach;
 ?>
@endsection 