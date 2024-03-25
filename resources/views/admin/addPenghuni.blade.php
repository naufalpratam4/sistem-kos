@extends('layout.admin')
@section('content')
    <div class="container" style="width: 1000px; margin-top:50px">
        <div class="d-flex justify-content-between">
            <h2 class="fw-bold">Penghuni kos</h2>

        </div>
        <div class="container" style="width: 800px; margin-top: 25px">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="email" class="form-control" id="" aria-describedby="">

                    <label for="exampleInputEmail1" class="form-label mt-2">Email</label>
                    <input type="email" class="form-control" id="" aria-describedby="">

                    <label for="exampleInputEmail1" class="form-label mt-2">Alamat Jalan</label>
                    <input type="email" class="form-control" id="" aria-describedby="">

                    <label for="exampleInputEmail1" class="form-label mt-2">Provinsi</label>
                    <input type="text" class="form-control" id="">

                    <label for="exampleInputEmail1" class="form-label mt-2">Provinsi</label>
                    <input type="email" class="form-control" id="" aria-describedby="">

                    <label for="exampleInputEmail1" class="form-label mt-2">Nomor Hp</label>
                    <input type="email" class="form-control" id="" aria-describedby="">

                    <label for="exampleInputEmail1" class="form-label mt-2">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tanggal" placeholder="Pilih Tanggal"
                        data-provide="datepicker">

                    <label for="" class="form-label mt-2">Tanggal Keluar</label>
                    <input type="date" class="form-control" id="" aria-describedby="">

                    <label for="" class="form-label mt-2">Kamar </label>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Kamar
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kamar 1</a></li>
                            <li><a class="dropdown-item" href="#">Kamar 2</a></li>
                            <li><a class="dropdown-item" href="#">Kamar 3</a></li>
                            <li><a class="dropdown-item" href="#">Kamar 4</a></li>
                            <li><a class="dropdown-item" href="#">Kamar 5</a></li>
                        </ul>
                    </div>


                    <label for="" class="form-label mt-2">Pembayaran</label>
                    <input type="number" placeholder="Rp. 500000" class="form-control" id="" aria-describedby="">
                </div>


                <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </div>
        </form>
    </div>

    </div>
@endsection
