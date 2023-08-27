<!-- !1 -->
Supplier

<!-- !2 Mendefinisikan Sistem -->
Jadi kita itu adalah supplier yang mendistribusikan 3 jenis produk indofood, yaitu indomie, indomilk dan chitato. sistem yang akan kita buat akan mempunyai fitur sebagai berikut:
1. mendata kemana saja, apa saja, dan jumlah barang yang dikirim
2. membuat data, melihat dan update status barang yang dikirim (akan/sedang/sudah)
3. data barang yang tersedia
4. update data barang
5. melihat data barang
6. menghapus data barang
7. membuat, melihat, menambah dan menghapus data varian dari suatu produk

<!-- !3 Mengumpulkan dan Menganalisis Kebutuhan Data-->
Data data yang diperlukan yaitu:
1. data barang yang tersedia
2. data varian yang tersedia dari suatu produk
3. alamat tujuan kirim barang
4. data barang yang dikirim
5. data jumlah barang yang dikirim
6. data status barang yang dikirim

Asset yang diperluka yaitu:
1. TODO: bikin desainnya dulu banh

<!-- !4 Mendesain Model Konseptual -->
Penjelasan ERD:

1. Entity "Barang" memiliki atribut:
    - ID_Barang (Kunci utama)
    - Nama_Barang
    - Harga
    - Stok

2. Entity "Varian" memiliki atribut:
    - ID_Varian (Kunci utama)
    - ID_Barang (Kunci asing, menghubungkan ke Barang)
    - Nama_Varian

3. Entity "Alamat_Tujuan" memiliki atribut:
    - ID_Alamat (Kunci utama)
    - Nama_Penerima
    - Alamat_Pengiriman
    - Kota
    - Kode_Pos

4. Entity "Pengiriman" memiliki atribut:
    - ID_Pengiriman (Kunci utama)
    - ID_Alamat (Kunci asing, menghubungkan ke Alamat_Tujuan)
    - Tanggal_Pengiriman
    - Status_Pengiriman

5. Entity "Detail_Pengiriman" memiliki atribut:
    - ID_Detail (Kunci utama)
    - ID_Pengiriman (Kunci asing, menghubungkan ke Pengiriman)
    - ID_Varian (Kunci asing, menghubungkan ke Varian)
    - Jumlah_Dikirim

Catatan:
- Hubungan antara "Barang" dan "Varian" adalah one-to-many, yang berarti satu barang dapat memiliki banyak varian, tetapi setiap varian terkait dengan satu barang.
- Hubungan antara "Alamat_Tujuan" dan "Pengiriman" adalah one-to-many, yang berarti satu alamat tujuan dapat digunakan untuk banyak pengiriman, tetapi setiap pengiriman terkait dengan satu alamat tujuan.
- Hubungan antara "Pengiriman" dan "Detail_Pengiriman" adalah one-to-many, yang berarti satu pengiriman dapat memiliki banyak detail pengiriman yang mewakili varian dan jumlah barang yang dikirim dalam pengiriman tersebut.

<!-- !5 Implementasi Sistem -->
Ngoding dehh...
