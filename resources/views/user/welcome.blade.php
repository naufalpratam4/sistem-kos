@extends('layout.user')

@section('content')
    <div>
        {{-- about --}}
        <div class="pt-20" id="about">@include('user.user')</div>
        {{-- fasilitas --}}
        <div class="pt-16" id="fasilitas">@include('user.fasilitas')</div>
        {{-- pilih paket --}}
        <div class=" pt-20" id="penawaran">@include('user.penawaran')</div>

        {{-- alamat --}}
        <div class="mx-20 pt-20" id="alamat">@include('user.alamat')</div>
    </div>
@endsection
