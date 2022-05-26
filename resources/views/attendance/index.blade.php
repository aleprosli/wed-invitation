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
            <h6> Lokasi : ..... </h6>
        </div>
        <div class="row text-muted text-center mt-2">
            <h6> Diminta jasa baik tuan/puan untuk isi maklumat berikut untuk memudahkan majlis kami nanti. </h6>
        </div>

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Wakil">
            <label for="floatingInput" class="text-center px-4" style="font-size: 12px">Nama Wakil</label>
        </div>
        
        <div class="row px-4 mt-3">
           <a type="button" href="#" class="btn btn-block btn-dark poppins">Tekan untuk kehadiran <i class='bx bx-check'></i></a>
        </div>
    </div>
</div>
@endsection