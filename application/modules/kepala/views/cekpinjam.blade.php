@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Cek Status Peminjaman</h1>
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
            <th scope="col">Plat</th>
            <th scope="col">KM Awal</th>
            <th scope="col">KM Akhir</th>
            <th scope="col">Kondisi Awal</th>
            <th scope="col">Kondisi Akhir</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarp as $dp) :
        if($dp['status']==3 || $dp['status']==4)
        {
        ?>
            <tr>
                <td><?= $id = $dp['id_pinjam']; ?></td>
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
                <td> <select name="status" class="form-control">
                 <?php if($dp['status']==3)
                 {
                     $status="Konfirmasi Direktur";
                 }
                 else
                 {
                     $status="Di Pinjam";
                 }  ?> 
            <option value="<?=$dp['status'];?>"><?= $status; ?></option>
        </select>
                <td>
                    <a href="<?= base_url('kepala/FormUpdatePinjam?u=' . $id); ?>">
                        <button class="btn btn-primary">Update</button>
                    </a>
                </td>
            </tr>
        <?php
        }
        endforeach;
        ?>
    </tbody>
</table>
@endsection