@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<table border="1" width="800" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Waktu Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Waktu Kembali</th>
            <th>Tempat</th>
            <th>Acara</th>
            <th>Plat</th>
            <th>Merk/type</th>
            <th>KM Awal</th>
            <th>KM akhir</th>
            <th>Kondisi Awal</th>
            <th>Kondisi Akhir</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarp as $dp) :
        ?>
            <tr>
                <td>#</td>
                <td><?= $dp['nama'] ?></td>
                <td><?= $dp['tgl_pinjam'] ?></td>
                <td><?= $dp['waktu_pinjam'] ?></td>
                <td><?= $dp['tgl_kembali'] ?></td>
                <td><?= $dp['waktu_kembali'] ?></td>
                <td><?= $dp['tempat'] ?></td>
                <td><?= $dp['acara']?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
@endsection