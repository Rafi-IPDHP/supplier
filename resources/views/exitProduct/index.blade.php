@extends('template.master')

@section('title', 'Barang Keluar')

@section('content')
<section class="container">
    <h1 class="fw-bold my-3">Data Barang Keluar</h1>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga (pcs)</th>
                <th scope="col">Quantity</th>
                <th scope="col" class="text-center">Opsi</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($exitProducts as $key => $value)
            <tr>
                <th scope="row">
                    {{ $key +1 }}
                </th>
                <td>{{ $value->product->name }}</td>
                <td>{{ $value->product->price }}</td>
                <td>{{ $value->quantity }}</td>
                <td class="text-center">
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Lihat Stock</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end gap-3">
        <a href="{{ route('welcome') }}" class="btn btn-secondary px-3 fw-semibold">Back</a>
        <a href="{{ route('exit-product.create') }}" class="btn btn-primary px-4 fw-semibold">Ambil Barang</a>
    </div>
</section>
@endsection
