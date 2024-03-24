@extends('layout.user')

@section('content')
    <div>

        {{-- pilih paket --}}
        <div class="mx-20 pt-20" id="penawaran">@include('user.penawaran')</div>

        {{-- alamat --}}
        <div class="mx-20 pt-20" id="alamat">@include('user.alamat')</div>
    </div>
@endsection
