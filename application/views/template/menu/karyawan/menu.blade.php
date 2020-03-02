<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Karyawan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
<li class="nav-item">
    <a href="{{base_url('karyawan/tolak')}}" class="nav-link
            ">
        <i class="far fa-circle nav-icon"></i>
        <p>Pemberitahuan</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{base_url('karyawan/peminjaman')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Peminjaman Mobil</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{base_url('karyawan/cekstatuspinjam')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Cetak</p>
    </a>
</li>
</ul>
</li>
<li class="nav-item">
    <a href="{{base_url('start/logout')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Logout
            <span class="right badge badge-danger"></span>
        </p>
    </a>
</li>