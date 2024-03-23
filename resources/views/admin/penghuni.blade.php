@extends('layout.admin')
@section('content')
    <div class="container" style="width: 1000px; margin-top:50px">
        <div class="d-flex justify-content-between">
            <h2 class="fw-bold">Penghuni kos</h2>
            <div>
                <a href="/addPenghuni">
                    <button class="btn btn-primary">tambah penghuni</button>
                </a>
            </div>

        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">email</th>
                    <th scope="col">nomor Hp</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">alamat</th>
                    <th scope="col">Kamar</th>
                    <th scope="col">Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penghuni as $no => $item)
                    <tr>
                        <th scope="row">{{ $no + 1 }}</th>
                        <td>{{ $item->nama_penghuni }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->tgl_masuk }}</td>
                        <td>{{ $item->tgl_keluar }}</td>
                        <td>{{ $item->alamat_jalan }}</td>
                        <td>{{ $item->kamar }}</td>
                        <td>{{ $item->pembayaran }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
