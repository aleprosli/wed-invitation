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
            <i class='bx bxs-gift'></i>
            <h6>Hadiah</h6>
            <form method="POST" action="{{ route('attendance.store') }}">
                @csrf
                    <div class="form-floating mx-auto w-50 p-2">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nama Wakil">
                        <label for="floatingInput" class="text-center px-4" style="font-size: 12px">Nilai Hadiah</label>
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
                    <div class="form-floating mx-auto w-50 p-2">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                              <p>Asal dari Bukit Siguntang, Kisah hikayat tidak terperi
                                Kami mengucap selamat datang, Hadir tuan menambah seri.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                              by <cite title="Source Title">Aliff Rosli</cite>
                            </figcaption>
                          </figure>
                    </div>

                    <div class="col-md-12 text-center px-2">
                        <a type="button" href="{{ route('main.index') }}" class="btn btn-block btn-warning poppins">Kembali <i class='bx bx-arrow-back'></i></a>
                        <button type="submit" class="btn btn-block btn-success poppins">Hantar Hadiah<i class='bx bx-check'></i></button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
