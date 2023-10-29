<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/logo2.png') }}" type="image/x-icon">
    <title>Barang Keluar</title>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
</head>
<body style="background-color: #FF8080; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    @include('template.navbar')

    {{-- content start --}}
    <section class="container mb-5">
        <h1 class="my-3 fw-bold">Tambah Data Barang Keluar</h1>
        <form action="{{ route('exit-product.store') }}" method="post" class="bg-white container rounded-4">
            @csrf
            <div class="row py-4 d-flex flex-column">
                <div class="col mb-3">
                    <label for="supplier" class="form-label fw-semibold ms-2">Supplier</label>
                    <select id="supplier" class="form-select" aria-label="Default select example" onchange="filterProductsBySupplier()">
                        <option disabled selected value="0">Pilih Supplier</option>
                        <option value="Indofood">Indofood</option>
                        <option value="Unilever">Unilever</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="nama_barang" class="form-label fw-semibold ms-2">Nama Barang</label>
                    <select id="nama_barang" name="product_id" class="form-select" aria-label="Default select example">
                        <option disabled selected>Pilih Barang</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" data-price="{{ $product->price }}" data-supplier="{{ $product->supplier }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-2">
                    <div class="row">
                        <div class="col">
                            <label for="price" class="form-label fw-semibold ms-2">Harga Barang (pcs)</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="price" id="price" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label fw-semibold ms-2">Quantity Barang</label>
                            <div class="input-group">
                                <input type="number" name="quantity" min="0" id="quantity" class="form-control" placeholder="10" oninput="validateQuantity()">
                                <span class="input-group-text">Pcs</span>
                            </div>
                        </div>
                    </div>
                    <p id="quantity-error" style="color: red;"></p>
                </div>
                <div class="col-6 mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="tanggal" disabled>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('exit-product.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary ms-2">Ambil Barang</button>
                </div>
            </div>
        </form>
    </section>
    {{-- content end --}}

    <script src="{{ asset('jquery-3.7.1.min.map') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script>
        var selectElement = document.getElementById('nama_barang');
        var priceInput = document.getElementById('price');
        var selectSupplier = document.getElementById('supplier');
        var selectProductOptions = selectElement.innerHTML;
        document.getElementById('date').valueAsDate = new Date();

        function validateQuantity() {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var stock = parseInt(selectedOption.getAttribute('data-stock'));
            var quantity = parseInt(document.getElementById('quantity').value);

            if (isNaN(stock) || isNaN(quantity)) {
                document.getElementById('quantity-error').textContent = '';
            } else {
                if (quantity > stock) {
                    document.getElementById('quantity-error').innerHTML = 'Quantity tidak boleh melebihi stock yang tersedia.';
                } else {
                    document.getElementById('quantity-error').textContent = '';
                }
            }
        }

        filterProductsBySupplier = () => {
                let selectedSupplier = selectSupplier.value;
                let options = selectElement.getElementsByTagName('option');
                selectElement.innerHTML = selectProductOptions;
                // Buat daftar pilihan baru
                let newOptions = [options[0]]; // Pertahankan opsi "Pilih Barang" sebagai opsi pertama
                for (let i = 1; i < options.length; i++) {
                    let optionSupplier = options[i].getAttribute('data-supplier');
                    if (optionSupplier == selectedSupplier) {
                        newOptions.push(options[i]);
                    }
                }
                // Hapus semua opsi lama
                while (selectElement.options.length > 0) {
                    selectElement.options[0] = null;
                }
                // Tambahkan opsi yang sesuai
                for (let i = 0; i < newOptions.length; i++) {
                    selectElement.appendChild(newOptions[i].cloneNode(true));
                }
            }

        document.addEventListener('DOMContentLoaded', function () {

            selectElement.addEventListener('change', function () {
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var price = selectedOption.getAttribute('data-price');

                if (price !== null) {
                    priceInput.value = price;
                } else {
                    priceInput.value = ''; // Reset the price input if data-price is not set.
                }
            });
            filterProductsBySupplier();
        });
    </script>
</body>
</html>
