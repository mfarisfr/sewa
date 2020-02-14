@layout('template/main/direktur/main')

@section('content')
<?php
ob_start();
$pdf = new TCPDF('P', 'mm', 'A4');

$pdf->setPrintFooter(false);
$pdf->setPrintHeader(false);

$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);


$pdf->SetFont('times', '', 14);
$pdf->AddPage();
foreach ($daftarp as $dp) {

    $id = $dp['id_pinjam_kar'];

    $isihtml = ' <p align= "center">Surat Peminjaman Kendaraan</p> 
    echo "<table>
    
    <p align = "left">Saya yang bertanda tangan di bawah ini :  <br>    
    <tr>
        <td>Nama</td>
        <td> : ' . $dp['nama'] . ' </td>
    </tr>

    <tr>
    <td>Jabatan</td>
    <td> : ' . $dp['nama_jabatan'] . '</td> 
    </tr>

    <tr>
    <td>Divisi</td>  
    <td> : ' . $dp['nama_disvisi'] . '</td> <br>
    </tr>
    Dengan ini saya memohon untuk meminjam kendaraan mobil untuk keperluan kegiatan yang akan dilaksanakan pada :<br>
    <tr>
        <td>Tanggal Pinjam</td>
        <td> : ' . $dp['tgl_pinjam'] . ' </td>
        </tr>
    <tr>
        <td>Waktu Pinjam</td>
        <td> : ' . $dp['waktu_pinjam'] . '</td> 
        </tr>
    <tr>
        <td>Tanggal Kembali</td>
        <td> : ' . $dp['tgl_kembali'] . '</td> 
        </tr>
    <tr>
        <td>Waktu Kembali</td>
        <td> : ' . $dp['waktu_kembali'] . ' </td>
        </tr>
    <tr>
        <td>Tempat</td>
        <td> : ' . $dp['tempat'] . '</td>
        </tr>
    <tr>
        <td>Acara</td>
        <td> : ' . $dp['acara'] . ' </td>
        </tr>
    <tr>
        <td>Plat</td>
        <td> : ' . $dp['plat'] . '</td>
        </tr>
    <tr>
        <td>Merk/type</td>
        <td> : ' . $dp['merk_type'] . '</td>
        </tr>
        </p>
        </table>"    
        <img src="' . base_url("/assets/dist/img/ttdfix.jpg") . '" alt="ttd">';
}
echo $isihtml;

$pdf->WriteHTML($isihtml, True, False, true, false, '');
ob_end_clean();
$pdf->Output('cetak.pdf', 'I');
?>
@endsection