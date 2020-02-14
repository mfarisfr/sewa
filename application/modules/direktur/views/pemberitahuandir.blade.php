@layout('template/main/direktur/main')

@section('content')
<center>
    <h1>INFORMASI STATUS PEMINJAMAN </h1>
</center>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id Pinjam </th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Waktu Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Waktu Kembali</th>
            <th scope="col">Tempat</th>
            <th scope="col">Acara</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarp as $dp) :

        ?>
            <tr>
                <td><?= $id = $dp['id_pinjam_kar']; ?></td>
                <td><?= $dp['nama']; ?></td>
                <td><?= $dp['tgl_pinjam']; ?></td>
                <td><?= $dp['waktu_pinjam']; ?></td>
                <td><?= $dp['tgl_kembali']; ?></td>
                <td><?= $dp['waktu_kembali']; ?></td>
                <td><?= $dp['tempat']; ?></td>
                <td><?= $dp['acara']; ?></td>
                <td><?= $dp['keterangan']; ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
@endsection