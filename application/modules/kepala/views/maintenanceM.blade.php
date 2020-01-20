@layout('template/main/kepala/main')

@section('content')

<center>

    <h1>Data Kerusakan</h1>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($daftarm as $a) :
                ?>
                    <?php $id = $a['id_listker']; ?>
                    <tr>
                        <td><?php echo $a['plat']; ?></td>
                        <td><?php echo $a['kondisi']; ?></td>
                        <td>
                            <a href="<?= base_url('kepala/pembaruanmobil?u=' . $id); ?>">
                                <button class="btn btn-primary">Perbaikan</button>
                            </a>
                        </td>
                    <?php
                endforeach;
                    ?>
        </div>
    </div>
    </table>
</center>
<center>
    <a href="<?= base_url('kepala/ker_awal'); ?>">
        <button class="btn btn-primary">Tambah Kerusakan Awal Mobil</button>
    </a>
    <a href="<?= base_url('kepala/histori_maintenance'); ?>">
        <button class="btn btn-primary">Histori Maintenance Mobil</button>
    </a>

    @endsection