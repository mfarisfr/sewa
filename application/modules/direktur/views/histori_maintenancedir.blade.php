@layout('template/main/direktur/main')

@section('content')

<center>
    <h1>Histori Maintenance</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Tanggal Perbaikan</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $no=1;
                    foreach ($daftarm as $a) :
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $a['plat']; ?></td>
                            <td><?= $a['kondisi']; ?></td>
                            <td><?= $a['tgl_perbaikan']; ?></td>
                        </tr>
                    <?php $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</center>

@endsection