@layout('template/main/kepala/main')

@section('content')

<center>
    <h1>Daftar Mobil</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"> No</th>
                                <th scope="col">Plat Mobil</th>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Merk/Type</th>
                                <th scope="col">Jenis/Model</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Warna Kb</th>
                                <th scope="col">Isi Silinder</th>
                                <th scope="col">No.Rangka</th>
                                <th scope="col">No.Mesin</th>
                                <th scope="col">No.Bpkb</th>
                                <th scope="col">Bahan Bakar</th>
                                <th scope="col">Warna Tnkb</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($daftarm as $a) :
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $a['plat']; ?></td>
                                <td><?php echo $a['nama_pemilik']; ?></td>
                                <td><?php echo $a['alamat']; ?></td>
                                <td><?php echo $a['merk_type']; ?></td>
                                <td><?php echo $a['jenis_model']; ?></td>
                                <td><?php echo $a['tahun']; ?></td>
                                <td><?php echo $a['warna_kb']; ?></td>
                                <td><?php echo $a['isi_silinder']; ?></td>
                                <td><?php echo $a['no_rangka']; ?></td>
                                <td><?php echo $a['no_mesin']; ?></td>
                                <td><?php echo $a['no_bpkb']; ?></td>
                                <td><?php echo $a['bahan_bakar']; ?></td>
                                <td><?php echo $a['warna_tnkb']; ?></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <a href="{{base_url('kepala/tambahdaftarmobil')}}" class="nav-link"><button class="btn btn-primary">Tambah Data</button></a>

</center>

@endsection