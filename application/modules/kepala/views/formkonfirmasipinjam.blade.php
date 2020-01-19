@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>Konfirmasi Peminjaman</h1>
</center>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">id Pinjam Kar</th>
            <th scope="col">Plat</th>
            <th scope="col">KM Awal</th>
            <th scope="col">KM akhir</th>
            <th scope="col">Kondisi Awal</th>
            <th scope="col">Kondisi Akhir</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="form-group">
                    <input type="number" name="km_awal" class="form-control" placeholder="<?= $id_pinjam_kar ?>">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <select name="plat" class="form-control">
                        <option value="">-Pilih</option>
                        <option value="AB2020AE">AB2020AE</option>
                        <option value="">BG19991ZA</option>
                        <option value="">A6543OU</option>
                    </select>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input type="number" name="km_awal" class="form-control" placeholder="KM Awal">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input type="number" name="km_akhir" class="form-control" placeholder="KM Akhir">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input type="text" name="kondisi_awal" class="form-control" placeholder="Kondisi Awal">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input type="text" name="kondisi_akhir" class="form-control" placeholder="Kondisi Akhir">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="1">Menunggu</option>
                        <option value="0">Ditolak</option>
                        <option value="2">Konfirmasi Kepala</option>
                    </select>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection