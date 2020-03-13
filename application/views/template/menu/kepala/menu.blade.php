<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
        <i class="fas fa-car-side"></i>
        <p>
            Penyewaan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{base_url('kepala/tolak')}}" class="nav-link
            ">
                <i class="far fa-circle nav-icon"></i>
                <p>Pemberitahuan</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{base_url('kepala/peminjaman')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Peminjaman Mobil</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{base_url('kepala/tabelcetak')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cetak</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
        <i class="fas fa-user-circle"></i>
        <p>
            Kepala
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{base_url('kepala/konfirmasipinjam')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Konfirmasi Peminjaman</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{base_url('kepala/cekstatuspinjam')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cek Peminjaman</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{base_url('kepala/pajak')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pajak Mobil</p>
                @if ($deadline > 0)
                <span class="dot">
                    {{ $deadline; }}
                </span>
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a href="{{base_url('kepala/maintenance')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Maintenance Mobil</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{base_url('kepala/tampilmobil')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Mobil</p>
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