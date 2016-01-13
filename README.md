Imagefly for Laravel 5
Installation
------------

Install using composer:

```bash
composer require ivliev/imagefly
```

Laravel (optional)
------------------

Add the service provider in `app/config/app.php`:

```php
Ivliev\Imagefly\ImageflyServiceProvider::class,
```

And add the Agent alias to `app/config/app.php`:

```php
'Imagefly' => Ivliev\Imagefly\Facades\Imagefly::class,
```
