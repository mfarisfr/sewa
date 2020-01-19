@layout('template/main/kepala/main')

@section('content')

<center>

    <h1>Histori Pembayaran Pajak</h1>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Plat Mobil</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pajak</th>
                        <th scope="col">Tanggal Pembayaran Pajak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($daftarp as $a) :
                    ?>
                        <tr>
                            <td><?php echo $a['plat']; ?></td>
                            <td><?php echo $a['harga']; ?></td>
                            <td><?php echo $a['tgl_pajak']; ?></td>
                            <td><?php echo $a['tgl_bayar']; ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
        </div>
    </div>
    </table>
</center>

@endsection