@layout('template/main/kepala/main')

@section('content')

<div class="form-group">
        <label for="plat"> Plat Kendaraan :</label>
        <select name="plat" class="form-control">
            <option value="<?= $plat ?>"><?= $plat ?></option>
        </select>
    </div>

 <div id = "myModal" class ="modal fade" role="dialog" >
     <div class="modal-dialog">
        <div class="modal-content">
         <div class ="modal-header">
            <button type = "button" class="close" data-dismiss ="modal">&times;</button>
             <h4 class="modal-title">Notifikasi Pajak Kendaraan</h4>
            </div>
            <div class = "modal-body">
                <p>Waktunya melakukan pembayaran pajak, waktu yang tersisa kurang dari 1 bulan!!</p>
            </div>
            <div class = "modal-footer">
                <button type ="button" class ="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
     
     </div>
</div>
<script>
    $('#myModal').modal('show');
</script>
@endsection