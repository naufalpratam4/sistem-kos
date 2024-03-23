@extends('layout.admin')

@section('content')
    <div class="container">
        {{-- total kamar --}}
        <div class="">
            <div class="card py-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="fw-bold">Kamar</h2>
                    <div>
                        <p class="card-text">total kamar : {{ $kamar }} </p>
                    </div>
                    <div>
                        <p class="card-text">kamar kosong : {{ $kamar_kosong }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
