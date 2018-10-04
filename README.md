About the LINE Messaging API

See the official API documentation for more information.

English: https://developers.line.me/en/docs/
Japanese: https://developers.line.me/ja/docs/
# Laravel Line Bot
Laravel 5.4.* Line Bot

Package Laravel yang berfungsi untuk menghubungkan line sdk.

## Instalasi

### Install dan Daftarkan Package
`composer require ferdhika31/laravel-line-bot`

Tambahkan Service Provider dan Facade pada `config.app`

```
'providers' => [

    Ferdhika31\LaravelLineBot\LineBotServiceProvider::class,

]
```

```
'aliases' => [

    'LineBot'  => Ferdhika31\LaravelLineBot\Facades\LineBot::class,

]
```

### Publish config
```
php artisan vendor:publish --provider="Ferdhika31\LaravelLineBot\LineBotServiceProvider"
```
## Penggunaan
-
