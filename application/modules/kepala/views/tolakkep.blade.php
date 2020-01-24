@layout('template/main/kepala/main')

@section('content')
<center>
    <h1>FORM Kerusakan Awal Mobil</h1>
</center>
<!-- <form method="POST" action="{{base_url('kepala/ker_awal')}}"> -->


    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" class="form-control">
    </div>



    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection