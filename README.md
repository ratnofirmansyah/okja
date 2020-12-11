# About Okja

Okja adalah sebuah web application yang digunakan untuk membantu management bisnis UMKM, terutama fokus pada data stock. Kami membuat ini penuh dengan harapan baik untuk membantu para pelaku UMKM mengolala data stocknya, seperti:

- Pengelolaan data masuk dan keluar.
- Pengelolaan cash flow.
- Laporan harian dan bulanan.
- Mengenali presentase kelarisan setiap produk atau kategori produk.

## Kebutuhan server

- PHP >= 7.3
- Apache 2.4
- MySql
- Composer

## Struktur Projek

Untuk mengurangi jumlah baris pada `controller`, projek ini memisahkan proses bisnis dengan controller pada folder `app/Http/Repositories`. Tidak berlaku untuk Voyager Controller.

    - app
      - Http
        - Controllers
          - YourController.php
		  - Repositories
		    - YourController
		      - DestroyData.php
		      - ListData.php
		      - ShowData.php
		      - StoreData.php
		      - UpdateData.php

Untuk desain database aplikasi ini ada di `database/dbdiagram.io` copy isi file tersebut kemudian buka menggunakan [dbdiagram.io](https://dbdiagram.io/) dan paste isi file tersebut
  
Untuk routing menggunakan 2 file:
- `web.php` untuk general route
- `api.php` untuk api route

## Step by Step Persiapan development

- Clone github repository ke local PC didalam folder local server
- setting virtual host di [C:\xampp\apache\conf\extra]
```text
		<VirtualHost *:80>
		    ServerName okja.local
		    DocumentRoot "C:/xampp/htdocs/okja/public"
		    <Directory "C:/xampp/htdocs/okja/public">
		        Require all granted
		        AllowOverride All
		    </Directory>
		</VirtualHost>
```
- setting windows host di [C:\Windows\System32\drivers\etc\hosts]
```text
		127.0.0.1       okja.local
```
- Copy file .env.example dan rename menjadi .env lalu ubah settingan dibawah seperti berikut
```text
		APP_NAME=Okja
		APP_URL=http://okja.local

		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=YOUR_DB_NAME
		DB_USERNAME=YOUR_USER
		DB_PASSWORD=YOUR_PASSWORD
```
- Buat database okja di database lokal server
- Jalankan perintah berikut
```text
		composer install
		php artisan migrate
		php artisan voyager:install
		php artisan db:seed
		php artisan voyager:admin your_email_address@okja.com --create
```

## Coding Style
- Menggunakan `camelCase` untuk nama variable dan fungsi
- Menggunakan `snake_case` untuk Eloquent Relationships dengan alasan menyesuaikan dengan nama table dan field dalam database
- Penggunaan plural untuk penamaan variable dan fungsi yang berupa array / banyak data, dan singular untuk data tunggal. 
  Misal: `$users = User::all();` bentuk plural / banyak dan `$user = User::find($id);` untuk bentuk singular / tunggal
- Menggunakan petik satu `'...'` untuk string dan petik dua `"..."` hanya untuk alternatif
- Nilai boolean adalah `true` dan `false` dengan huruf kecil
- Penamaan route menggunakan `lowercase` dan untuk yang lebih dari 1 kata dihubungkan dengan tanda `-`
- Membuat controller menggunakan perintah:

        php artisan make:controller NameController
- Struktur folder Repositories menyesuaikan dengan contoh **Struktur Project** di atas
- Untuk nama fungsi di controller dan struktur repositories tambahan yang tidak ada dalam standar template di atas, diwajibkan menggunakan nama yang jelas, bahasa inggris, dan menggunakan `camelCase`
- Khusus data berbentuk list menggunakan **Laravel Query Builder** untuk optimasi pengambilan data
- Selain data berbentuk list menggunakan **Laravel Eloquent ORM**

## How to push update

Untuk keperluan development maka branch yang dikerjakan masing-masing developer akan dibuat terpisah sesuai nama masing-masing developer.  
Untuk langkah-langkah penggunaan repository ini sebagai berikut :
1. Clone repo ini
 
        git clone repo-url
2. Chekout ke branch masing-masing

        git checkout -b your-branch
3. Sebelum melanjutkan coding mohon update source code dari branch `master` dulu

        git checkout your-branch
        git pull origin master
4. Setiap mau mengupdate pada repository lakukan langkah berikut

        git add .
        git pull origin your-branch
        git commit -m "commit comment"
        git push origin your-branch
5. Untuk merge / menggabungkan perubahan ke master gunakan fitur **Pull Request** pada Github guna pengecekan apakah terjadi konflik atau tidak. 
6. Pastikan jika semua perubahan sudah dipush jangan lupa untuk kembali update dari branch `master`

        git checkout your-branch
        git pull origin master

## Tim Developer
1. [Ratno Firmansyah](mailto:asturof11@gmail.com)
