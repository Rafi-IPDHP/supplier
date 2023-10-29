@extends('template.master')

@section('title', 'Laporan Barang Keluar')

@section('content')
<div class="container mt-1">
    <h1 class="fw-bold py-3">Laporan Barang Masuk</h1>
    <table class="table mb-2">
        <thead class="table-secondary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Distributor</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Qty</th>
                <th scope="col">Harga (Pcs)</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($products as $key => $product)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $product->tanggal }}</td>
                    <td>{{ $product->product->supplier }}</td>
                    <td>{{ $product->product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->product->price }}</td>
                    <td>{{ $product->product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="{{ route('laporan.index') }}" class="btn btn-secondary mt-2 fw-semibold">Back</a>
    </div>
</div>
@endsection
