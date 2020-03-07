@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Waktu Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Waktu Kembali</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Acara</th>
                            <th scope="col">Status Tanggapan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($daftarp as $dp) : ?>
                            <tr>
                                <td><?= $id = $dp['id_pinjam_kar'] ?></td>
                                <td><?= $dp['nama'] ?></td>
                                <td><?= $dp['tgl_pinjam'] ?></td>
                                <td><?= $dp['waktu_pinjam'] ?></td>
                                <td><?= $dp['tgl_kembali'] ?></td>
                                <td><?= $dp['waktu_kembali'] ?></td>
                                <td><?= $dp['tempat'] ?></td>
                                <td><?= $dp['acara'] ?></td>
                                <td></td>
                                <td>
                                    <a href="<?= base_url('kepala/kirimdirektur?u=' . $id); ?>">
                                        <button class="btn btn-primary">Tanggapi</button>
                                    </a>
                                </td>
                            </tr>
                            <?php foreach ($daftarpk as $d) :
                                if ($dp['id_pinjam_kar'] == $d['id_pinjam_kar']) {
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
                                        <td>Sudah Ditanggapi</td>
                                        <td>
                                            <a href="<?= base_url('kepala/kirimdirektur?u=' . $id); ?>">
                                                <button class="btn btn-primary">Tanggapi</button>
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            endforeach; ?>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection