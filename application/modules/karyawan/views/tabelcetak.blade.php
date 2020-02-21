@layout('template/main/karyawan/main')

@section('content')
<center>
    <h1>FORM CETAK </h1>
</center>
<div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
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
            <th scope="col">Plat</th>
            <th scope="col">Merk/type</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarp as $dp) :
            if ($dp['status'] == "konfirmasi direktur") {
        ?>
                <tr>
                    <td><?= $id= $dp['id_pinjam']; ?></td>
                    <td><?= $dp['nama']; ?></td>
                    <td><?= $dp['tgl_pinjam']; ?></td>
                    <td><?= $dp['waktu_pinjam']; ?></td>
                    <td><?= $dp['tgl_kembali']; ?></td>
                    <td><?= $dp['waktu_kembali']; ?></td>
                    <td><?= $dp['tempat']; ?></td>
                    <td><?= $dp['acara']; ?></td>
                    <td><?= $dp['plat']; ?></td>
                    <td><?= $dp['merk_type']; ?></td>

                    <td>
                        <a href="<?= base_url('karyawan/cetakfile?u=' . $id); ?>">
                        <button class="btn btn-primary">Cetak</button>
                        </a>
                    </td>
                </tr>
        <?php
            }
        endforeach;
        ?>
    </tbody>
</table>
      </div>
      </div>
</div>
@endsection