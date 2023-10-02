@extends('template.master')

@section('title', 'Data Barang')

@section('content')
<section class="container">
    <h1 class="fw-bold my-3">Data Barang</h1>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Stock</th>
                <th scope="col">Harga (pcs)</th>
                <th scope="col">Supplier</th>
                @can('isAdmin')
                <th scope="col">Opsi</th>
                @endcan
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($products as $key => $product)
            <tr>
                <th scope="row">
                    {{ $key +1 }}
                </th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->supplier }}</td>
                @can('isAdmin')
                <td>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">

                    {{-- <a href="{{ route('product.show', $product->id) }}">Show</a> --}}

                    @csrf
                    @method('DELETE')

                        <button type="submit" class="border-0 bg-transparent"><img src="{{ asset('assets/delete.png') }}" alt="..." style="width: 30px"></button>
                    </form>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end gap-3">
        <a href="{{ route('welcome') }}" class="btn btn-secondary px-3 fw-semibold">Back</a>
        @can('isAdmin')
        <a href="{{ route('product.create') }}" class="btn btn-primary px-4 fw-semibold">Add product</a>
        @endcan
    </div>
</section>
@endsection
