{{-- <nav class="navbar " style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Penghuni</a>
        <a class="navbar-brand" href="#">Kamar</a>
        <a class="navbar-brand" href="#">Riwayat transaksi</a>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg "style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Kos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin-dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penghuni">Penghuni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kamar">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/riwayatTransaksi">Riwayat Transaksi</a>
                </li>
            </ul>
            <span class="navbar-text">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="#"></a></li> --}}
                        <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </div>
            </span>
        </div>
    </div>
</nav>
