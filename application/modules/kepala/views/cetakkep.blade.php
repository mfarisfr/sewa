@layout('template/main/karyawan/main')

@section('content')
<?php 
    ob_start();
    $pdf = new TCPDF('P', 'mm', 'A4');
        
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        
        
        $pdf->SetFont('times','', 14);
        $pdf->AddPage();
        foreach ($daftarp as $dp) {
    
     $id = $dp['id_pinjam_kar'];       

    $isihtml = ' <p align= "center">Surat Peminjaman Kendaraan</p> 
    <p align = "left">Saya yang bertanda tangan di bawah ini :  <br>    
        Nama        : '.$dp['nama'].' <br>
        Jabatan     : '.$dp['nama_jabatan'].' <br>
        Divisi      : '.$dp['nama_disvisi'].' <br> <br>
    Dengan ini saya memohon untuk meminjam kendaraan mobil untuk keperluan kegiatan yang akan dilaksanakan pada :<br>
        Tanggal Pinjam      : '.$dp['tgl_pinjam'].' <br>
        Waktu Pinjam        : '.$dp['waktu_pinjam'].' <br>
        Tanggal Kembali     : '.$dp['tgl_kembali'].' <br>
        Waktu Kembali       : '.$dp['waktu_kembali'].' <br>
        Tempat              : '.$dp['tempat'].' <br>
        Acara               : '.$dp['acara'].' <br>
        Plat                : '.$dp['plat'].' <br>
        Merk/type	        : '.$dp['merk_type'].'
        </p>
        <img src="'.base_url("/assets/dist/img/ttdfix.jpg").'" alt="ttd">';
        }
        echo $isihtml;

         $pdf->WriteHTML($isihtml, True, False, true, false, '');  
        ob_end_clean(); 
         $pdf->Output('cetak.pdf', 'I');        
?>
@endsection