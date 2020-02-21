@layout('template/main/kepala/main')

@section('content')

<center>

    <h1>Histori Pembayaran Pajak</h1>
    <div class="container">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      <div class="card-body">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>                        
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pajak</th>
                        <th scope="col">Tanggal Pembayaran Pajak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;foreach ($daftarp as $a) :
                    ?>
                        <tr>
                            <td><?=$no;?></td>
                            <td><?php echo $a['plat']; ?></td>
                            <td><?php echo $a['harga']; ?></td>
                            <td><?php echo $a['tgl_pajak']; ?></td>
                            <td><?php echo $a['tgl_bayar']; ?></td>
                        </tr>
                    <?php
                    $no++;
                    endforeach;
                    ?>
                </tbody>
        </div>
    </div>
    </table>
      </div>
      </div>
    </div>
</center>

@endsection