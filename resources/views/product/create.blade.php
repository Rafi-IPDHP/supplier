@extends('template.master')

@section('title', 'Data Barang')

@section('content')
    {{-- content start --}}
    <section class="container mb-5">
        <h1 class="my-3 fw-bold">Tambah Data Barang</h1>
        <form action="{{ route('product.store') }}" method="post" class="bg-white container rounded-4">
            @csrf
            <div class="row py-4 d-flex flex-column">
                <div class="col mb-3">
                    <label for="supplier" class="form-label fw-semibold ms-2">Supplier</label>
                    <select id="supplier" name="supplier" class="form-select" aria-label="Default select example">
                        <option disabled selected value="0">Pilih Supplier</option>
                        <option value="Indofood">Indofood</option>
                        <option value="Unilever">Unilever</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="name" class="form-label fw-semibold ms-2">Nama Barang</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Indomie">
                </div>
                <div class="col">
                    <input type="number" name="stock" id="stock" value="0" class="form-control" hidden>
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label fw-semibold ms-2">Harga Barang (pcs)</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary ms-2">Tambah Data</button>
                </div>
            </div>
        </form>
    </section>
    {{-- content end --}}
@endsection
