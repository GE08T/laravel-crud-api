## General info
Aplikasi laravel versi 9 yang digunakan untuk backend atau sebagai penyedia API catatan berisikan satu CRUD sederhana

## Tools
- Composer
- Node Js
- IDE
- Browser
- Xampp
- PHP 8.1

## Download
- Instal menggunakan Git :

```
$ git clone https://github.com/GE08T/laravel-crud-api/
```
- Atau mendownloadnya secara manual dengan file .zip

## Running
- Setelah mendownloadnya kalian bisa install composernya :
```
$ composer install
```
- Jalankan node install untuk mengistal node depedencies nya : 
```
$ npm install
```
- Copy file .env.example namai dengan .env : 
```
$ cp .env.example .env
```
- Jalankan key generate untuk megenerate app key :
```
$ php artisan key:generate
```
- Di ```.env``` file ubah ```DB_DATABASE : laravel``` sesuai nama db yang di inginkan
- Lalu migrate database ke :
```
$ php artisan migrate
```
- Setelah itu jalankan aplikasinya
```
$ php artisan serve
```
- Jangan lupa untuk mengaktifkan ```apache``` dan ```mysql``` di Xampp kalian

## Testing
- Cobalah untuk semua Method di aplikasi Postman kalian, dengan port : ``` http://127.0.0.1:8000/api/note/ ```
