@layout('template/main/direktur/main')

@section('content')

<center>
    <h1>Histori Maintenance</h1>
</center>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Tanggal Perbaikan</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection