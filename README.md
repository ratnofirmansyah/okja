## About Okja

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

## Step by Step Persiapan development

- Clone github repository ke local PC didalam folder local server
- setting virtual host di [C:\xampp\apache\conf\extra\httpd-vhosts.conf]
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
