@layout('template/main/kepala/main')

@section('content')

<center>

    <h1>Data Pajak</h1>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pajak</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($daftarp as $a) :
                ?>
                    <?php $id = $a['id_pajak']; ?>
                    <tr>
                        <td><?= $no; ?>
                        <td><?php echo $a['plat']; ?></td>
                        <td><?php echo $a['harga']; ?></td>
                        <td><?php echo $a['tgl_pajak']; ?></td>
                        <td>
                            <a href="<?= base_url('kepala/pembaruanpajak?u=' . $id); ?>">
                                <button class="btn btn-primary">Perbarui</button>
                            </a>
                        </td>
                    <?php
                    $no++;
                endforeach;
                    ?>
        </div>
    </div>
    </table>
</center>
<center><a href="<?= base_url('kepala/pajakawal'); ?>">
        <button class="btn btn-primary">Tambah Pajak Awal Mobil</button>
        <a href="<?= base_url('kepala/histori_pajak'); ?>">
            <button class="btn btn-primary">Histori Pembayaran Pajak Mobil</button>


            @endsection