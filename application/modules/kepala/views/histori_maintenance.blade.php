@layout('template/main/kepala/main')

@section('content')

<center>
    <h1>Histori Maintenance</h1>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($daftarm as $a) :
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $a['plat']; ?></td>
                        <td><?php echo $a['kondisi']; ?></td>
                        <td><?php echo $a['tanggal']; ?></td>

                    </tr>
                <?php
                    $no++;
                endforeach;
                ?>

            </table>
        </div>
    </div>
</center>

@endsection