@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins';font-size: 22px;
    }

    h1 { font-family: 'Berkshire Swash'}
    
</style>

<div class="container bg-white">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center px-2">
            <i class='bx bx-male-female'></i>
            <h6>Undangan Majlis Pertunangan</h6>
            
        </div>
        <div class="row text-muted text-center mt-2">
            <h6> Lokasi : Belakang Balai Polis Gunong, Bachok </h6>
        </div>
        <div class="row text-muted text-center mt-2">
            <h6> Diminta jasa baik tuan/puan untuk isi maklumat berikut untuk memudahkan majlis kami nanti. </h6>
        </div>

        <form method="POST" action="{{ route('attendance.store') }}">
        @csrf
            <div class="form-floating mx-auto w-50 p-2">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nama Wakil">
                <label for="floatingInput" class="text-center px-4" style="font-size: 12px">Nama Wakil</label>
            </div>
            <div class="form-floating mx-auto w-50 p-2">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Emel Wakil">
                <label for="floatingInput" class="text-center px-4" style="font-size: 12px">Emel Wakil</label>
            </div>
            <div class="row px-4 mt-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="font-size: 10px">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
            </div>
            <div class="col-md-12 text-center px-2">
                <a type="button" href="{{ route('main.index') }}" class="btn btn-block btn-warning poppins">Kembali <i class='bx bx-arrow-back'></i></a>
                <button type="submit" class="btn btn-block btn-dark poppins">Hantar kehadiran <i class='bx bx-check'></i></button>
            </div>
             <div class="col-md-12 text-center mt-2">
                 <a type="button" href="{{ route('gift.index') }}" class="btn btn-block btn-success poppins">Hantar Hadiah <i class='bx bxs-gift'></i></a>
              </div>
        </form>
    </div>
</div>
@endsection
