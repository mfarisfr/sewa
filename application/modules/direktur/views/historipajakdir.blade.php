@layout('template/main/direktur/main')

@section('content')

<center>
    <h1>Histori Pembayaran Pajak</h1>
</center>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
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
            </table>
        </div>
    </div>
</div>

@endsection