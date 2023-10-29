@extends('template.master')

@section('title', 'Laporan')

@section('content')
<div class="container">
    <div class="row d-flex flex-column">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <div class="row py-2">
                        <div class="col">
                            <p class="card-text d-flex align-items-center fs-4">Barang Masuk</p>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('laporan_masuk') }}" class="btn px-4" style="background-color: #FF8080;">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row py-2">
                        <div class="col">
                            <p class="card-text d-flex align-items-center fs-4">Barang Keluar</p>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('laporan_keluar') }}" class="btn px-4" style="background-color: #FF8080;">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-end">
            <a href="{{ route('welcome') }}" class="btn mt-4 text-white me-1 px-4" style="background-color: #9C1718;">Kembali</a>
        </div>
    </div>
</div>
@endsection
