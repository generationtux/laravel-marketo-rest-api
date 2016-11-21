# Laravel 5 Marketo Provider

## Installation

`composer require generationtux/laravel-marketo-rest-api`

### Add the service provide and facade to your `config/app.php`

```php
// For Laravel

// Service Provider
'providers' => [
    ...
    GenTux\Artisan\Marketo\MarketoServiceProvider::class,
];

// Facade
'aliases' => [
    'Marketo' => GenTux\Artisan\Marketo\MarketoFacade::class,
];


// For Lumen

// app.php
$app->register(GenTux\Artisan\Marketo\MarketoServiceProvider::class);

```
 
 
### Publish the config file

`php artisan vendor:publish --provider="GenTux\Artisan\Marketo\MarketoServiceProvider"`

If you're using Lumen and do not have access to publish a config, use the code below fo config and name it marketo.php:

```php
<?php

return [
    'auth' => [
        'api_url' => env('MARKETO_API_URL'),
        'client_id' => env('MARKETO_CLIENT_ID'),
        'client_secret' => env('MARKETO_CLIENT_SECRET'),
    ]
];
```
