<!-- !1 -->
Supplier

<!-- !2 Mendefinisikan Sistem -->
Jadi kita itu adalah supplier yang mendistribusikan barang. sistem yang akan kita buat akan mempunyai fitur sebagai berikut:
1. Kita menyediakan 2 hak akses yaitu supplier dan agen
2. kalau kita login sebagai supplier, kita akan diarahkan ke halaman supplier dan kita bisa melihat data barang yang tersedia, mendata barang yang masuk, meng-updatenya dan menghapusnya.
3. kalau kita login sebagai agen kita akan diarahkan ke halaman ke halaman agen dan kita bisa melihat data barang yang tersedia dan mengambil barang.

<!-- !3 Mengumpulkan dan Menganalisis Kebutuhan Data -->
Data data yang diperlukan yaitu:
1. data barang yang tersedia
2. data barang yang masuk
3. data barang yang akan diambil
4. data user

Asset yang diperlukan yaitu:
1. TODO: bikin desainnya dulu banh

<!-- !4 Mendesain Model Konseptual -->
Penjelasan ERD:

- Tabel 1: user
id (Primary Key)
name
email
password
role

- Tabel 2: incoming_product
id (Primary Key)
name
price
quantity
product_id (Foreign Key) [Merujuk ke product.id]
user_id (Foreign Key) [Merujuk ke user.id]

- Tabel 3: exit_product
id (Primary Key)
name
price
quantity
product_id (Foreign Key) [Merujuk ke product.id]
user_id (Foreign Key) [Merujuk ke user.id]

- Tabel 4: product
id (Primary Key)
name
stock

<!-- !5 Implementasi Sistem -->
Ngoding dehh...
