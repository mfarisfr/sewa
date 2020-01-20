@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id Pinjam Karyawan</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Waktu Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Waktu Kembali</th>
            <th scope="col">Tempat</th>
            <th scope="col">Acara</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarp as $dp) :
        ?>
            <tr>
                <td><?= $id = $dp['id_pinjam_kar'] ?></td>
                <td><?= $dp['nama'] ?></td>
                <td><?= $dp['tgl_pinjam'] ?></td>
                <td><?= $dp['waktu_pinjam'] ?></td>
                <td><?= $dp['tgl_kembali'] ?></td>
                <td><?= $dp['waktu_kembali'] ?></td>
                <td><?= $dp['tempat'] ?></td>
                <td><?= $dp['acara'] ?></td>
                <td>
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="1">Menunggu</option>
                            <option value="0">Ditolak</option>
                            <option value="2">Konfirmasi Kepala</option>
                        </select>
                    </div>
                </td>
                <td>
                    <a href="<?= base_url('kepala/kirimdirektur?u=' . $id); ?>">
                        <button class="btn btn-primary">Tanggapi</button>
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
@endsection