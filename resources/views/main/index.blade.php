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
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <i class='bx bx-male-female'></i>
            <h6>Undangan Majlis Pertunangan</h6>
            
        </div>
        <div class="row text-muted text-center">
            <h6> Assalamualaikum W.B.T </h6>
        </div>
        <div class="row text-center">
            <h1> Aliff </h1>
        </div>
        <div class="row text-center">
            <h1> & </h1>
        </div>
        <div class="row text-center">
            <h1> Izzati </h1>
        </div>
        <div class="row text-muted text-center mt-2">
            <h6> Dengan segala hormatnya menjemput </h6>
        </div>
        <div class="row text-center">
            <h5> Dato’ / Datin / Tuan / Puan / Encik / Cik </h5>
        </div>
        <div class="row text-muted text-center mt-2">
            <h6> suami/isteri sekeluarga ke majlis pertunangan putera  kami bersama pilihan hatinya </h6>
        </div>
        <div class="row text-center mt-2">
            <h6> Bertempat di</h6>
        </div>
        <div class="row text-muted text-center mt-2">
            <div class="grid grid-cols-2">
                <a href="#" class="btn btn-sm btn-light">Google Maps</a>
                <a href="#" class="btn btn-sm btn-light">Waze</a>
            </div>
        </div>
        <div class="row text-muted text-center mt-4">
            <h6> Pada Tarikh/Hari</h6>
        </div>
        <div class="row text-center mt-2">
            <h1> 17 September 2022, Sabtu</h1>
        </div>
        <div class="col-md-12 text-center px-2">
           <a type="button" href="{{ route('attendance.index') }}" class="btn btn-block btn-dark poppins">Isi untuk kehadiran <i class='bx bxs-direction-left'></i></a>
        </div>
        <div class="col-md-12 text-center mt-2">
            <a type="button" href="{{ route('gift.index') }}" class="btn btn-block btn-success poppins">Hantar Hadiah <i class='bx bxs-gift'></i></a>
         </div>
    </div>
</div>
@endsection
