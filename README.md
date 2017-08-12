# LARAKUY LOG ACTIVITY
Simple save log activity helper.

Package Laravel yang berfungsi untuk menyimpan log aktivitas ke dalam database.
Diambil dari itsolutionstuff.

## Instalasi

### Install dan Daftarkan Package
`composer require larakuy/log-activity`

Tambahkan Service Provider dan Facade pada `config.app`

```
'providers' => [

    Larakuy\LogActivity\LogActivityServiceProvider::class

]
```

```
'aliases' => [

    'LogActivity' => Larakuy\LogActivity\Facades\LogActivity::class

]
```

### Jalankan Migration
```
php artisan migrate
```
Ini akan membuat config file di lokasi folder config/line.php

## Penggunaan
-

