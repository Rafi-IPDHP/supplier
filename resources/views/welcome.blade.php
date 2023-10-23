@extends('template.master')

@section('title', 'Dashboard')

@section('content')
<div style="background-image: url('{{ asset('assets/home1.png') }}'); height: 435px;" class="img-fluid d-flex justify-content-center align-items-center mb-4">
    <h1 class="fw-bold">WELCOME SUPPLIER</h1>
</div>

<div class="container">
    <div class="row d-flex flex-column text-center">
        <div class="col mt-4">
            <h2 class="fw-bold">Tentang Kami</h2>
        </div>
        <div class="col mt-2">
            <p class="fw-semibold">Supplier Indofood kami merupakan sebuah aplikasi untuk menyuplai produk dari Indofood.</p>
        </div>
        <div class="col">
            <img src="{{ asset('assets/home2.png') }}" alt="..." class="img-fluid mt-4 mb-3" style="width: 650px">
        </div>
    </div>
</div>

<footer style="background-color: #FFFEFE" class="pb-4">
    <div class="row container">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="row d-flex flex-column text-center">
                <div class="col">
                    <img src="{{ asset('assets/logo2.png') }}" alt="..." style="width: 170px;">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/icon_fb.png') }}" alt="..." style="width: 30px;" class="me-4">
                    <img src="{{ asset('assets/icon_ig.png') }}" alt="..." style="width: 30px;" class="me-4">
                    <img src="{{ asset('assets/icon_twitter.png') }}" alt="..." style="width: 30px;">
                </div>
            </div>
        </div>
        <div class="col mt-5 d-flex flex-column justify-content-start">
            <p class="fw-semibold">Hubungi Kami</p>
            <p style="line-height: 8px">+62 8895 181205</p>
            <p style="line-height: 8px">indofoodsupplier@gmail.com</p>
        </div>
        <div class="col mt-5 d-flex flex-column justify-content-start">
            <p class="fw-semibold">Service Kami</p>
            <p style="line-height: 8px">Tentang Kami</p>
            {{-- <p style="line-height: 8px">Login</p> --}}
        </div>
    </div>
    <div class="row container-xxl mt-3 pe-0">
        <div class="col">
            <hr>
        </div>
    </div>
</footer>
@endsection
