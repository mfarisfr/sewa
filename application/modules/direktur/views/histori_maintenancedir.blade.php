@layout('template/main/direktur/main')

@section('content')

<center>
    <h1>Histori Maintenance</h1>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Tanggal Perbaikan</th>
                    </tr>
                </thead>
                <?php
                foreach ($daftarm as $a) :
                ?>
                    <tr>
                        <td><?= $a['plat']; ?></td>
                        <td><?= $a['kondisi']; ?></td>
                        <td><?= $a['tgl_perbaikan']; ?></td>

                    </tr>
                <?php
                endforeach;
                ?>

            </table>
        </div>
    </div>
</center>

@endsection