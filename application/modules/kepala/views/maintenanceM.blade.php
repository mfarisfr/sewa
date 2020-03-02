@layout('template/main/kepala/main')

@section('content')

<center>

    <h1>Data Kerusakan</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Plat Mobil</th>
                                <th scope="col">Kondisi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($daftarm as $a) :
                            ?>
                                <?php $id = $a['id_listker']; ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $a['plat']; ?></td>
                                    <td><?php echo $a['kondisi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('kepala/pembaruanmobil?u=' . $id); ?>">
                                            <button class="btn btn-primary">Perbaikan</button>
                                        </a>
                                    </td>
                                <?php
                                $no++;
                            endforeach;
                                ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</center>
<center>
    <a href="<?= base_url('kepala/ker_awal'); ?>">
        <button class="btn btn-primary">Tambah Kerusakan Awal Mobil</button>
    </a>
    <a href="<?= base_url('kepala/histori_maintenance'); ?>">
        <button class="btn btn-primary">Histori Maintenance Mobil</button>
    </a>
    @endsection