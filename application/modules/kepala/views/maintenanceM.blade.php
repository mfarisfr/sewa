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
                    <tr>
                        <td><?php echo $a['plat']; ?></td>
                        <td><?php echo $a['kondisi']; ?></td>
                        <td>
                            <!-- <a href="<?= base_url('kepala/pembaruanpajak?u=' . $id); ?>"> -->
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
            <a href="#">
            <button class="btn btn-primary">Histori Maintenance Mobil</button>


@endsection