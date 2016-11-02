# Laravel 5 Marketo Provider

## Installation

`composer require generationtux/laravel-marketo-rest-api`

### Add the service provide and facade to your `config/app.php`

```php
// Service Provider
'providers' => [
    ...
    GenTux\Artisan\Marketo\MarketoServiceProvider::class,
];

// Facade
'aliases' => [
    'Marketo' => GenTux\Artisan\Marketo\MarketoFacade::class,
];

```
 
### Publish the config file

`php artisan vendor:publish --provider="GenTux\Artisan\Marketo\MarketoServiceProvider"`