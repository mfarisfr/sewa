@layout('template/main/direktur/main')

@section('content')
<center>
    <h1>Histori Peminjaman</h1>
</center>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Waktu Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Waktu Kembali</th>
            <th scope="col">Tempat</th>
            <th scope="col">Acara</th>
            <th scope="col">Plat</th>
            <th scope="col">KM Awal</th>
            <th scope="col">KM Akhir</th>
            <th scope="col">Kondisi Awal</th>
            <th scope="col">Kondisi Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarpin as $dp) :
        if($dp['status']==5)
        {
        ?>
            <tr>
                <td><?= $dp['nama']; ?></td>
                <td><?= $dp['tgl_pinjam']; ?></td>
                <td><?= $dp['waktu_pinjam']; ?></td>
                <td><?= $dp['tgl_kembali']; ?></td>
                <td><?= $dp['waktu_kembali']; ?></td>
                <td><?= $dp['tempat']; ?></td>
                <td><?= $dp['acara']; ?></td>
                <td><?= $dp['plat']; ?></td>
                <td><?= $dp['km_awal']; ?></td>
                <td><?= $dp['km_akhir']; ?></td>
                <td><?= $dp['kerusakana_awal']; ?></td>
                <td><?= $dp['kerusakan_akhir']; ?></td>
            </tr>
        <?php
        }
        endforeach;
        ?>
    </tbody>
</table>
@endsection