<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/logo2.png') }}" type="image/x-icon">
    <title>Barang Masuk</title>
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
        <h1 class="my-3 fw-bold">Tambah Data Barang Masuk</h1>
        <form action="{{ route('incoming-product.store') }}" method="post" class="bg-white container rounded-4">
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
                        {{-- <option value="Indomilk" id="indomilk" data-price="{{ $products->price[0] }}">Indomilk</option>
                        <option value="Qtela" id="qtela">Qtela</option>
                        <option value="Pepsodent" id="pepsodent">Pepsodent</option> --}}
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" data-price="{{ $product->price }}" data-supplier="{{ $product->supplier }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-3">
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
                                <input type="number" name="quantity" id="quantity" class="form-control" placeholder="10">
                                <span class="input-group-text">Pcs</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col mb-4">
                    <label for="unit" class="form-label fw-semibold ms-2">Unit</label>
                    <select id="unit" name="unit" class="form-select" aria-label="Default select example">
                        <option disabled selected>Pilih Unit</option>
                        <option value="pcs">Pcs</option>
                        <option value="botol">Botol</option>
                        <option value="kotak">kotak</option>
                    </select>
                </div> --}}
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('incoming-product.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary ms-2">Tambah Data</button>
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

                // ===== BEDA KODE =====

                // let selectedSupplier = selectSupplier.value
                // let options = selectElement.getElementsByTagName('option');
                // // console.log(options)

                // for (let i = options.length - 1; i >= 0; i--) {
                //     let optionSupplier = options[i].getAttribute('data-supplier');
                //     // console.log(optionSupplier)
                //     if (optionSupplier != selectedSupplier && selectedSupplier != '0') {
                //         selectElement.removeChild(options[i]);
                //     }
                // }

                // selectElement.selectedIndex = 0;
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

            // function filterProductsBySupplier() {
            //     var selectedSupplier = selectSupplier.value;

            //     // Kosongkan opsi "Nama Barang"
            //     selectElement.innerHTML = selectProductOptions;

            //     // Tampilkan opsi yang sesuai dengan supplier yang dipilih
            //     if (selectedSupplier !== '0') {
            //         // Loop melalui opsi dan hapus yang tidak sesuai dengan supplier yang dipilih
            //         var options = selectElement.getElementsByTagName('option');
            //         for (var i = options.length - 1; i >= 0; i--) {
            //             var optionSupplier = options[i].getAttribute('data-supplier');
            //             if (optionSupplier !== selectedSupplier) {
            //                 selectElement.removeChild(options[i]);
            //             }
            //         }
            //     }

            //     // Setel opsi pertama sebagai yang terpilih
            //     selectElement.selectedIndex = 0;

            //     // Perbarui harga
            //     // updatePrice();
            // }

            // // Panggil filterProductsBySupplier saat halaman dimuat
            filterProductsBySupplier();
        });
    </script>
</body>
</html>
