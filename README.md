# Imagefly for Laravel 5

This module allows you to quickly create resized / cropped images directly through url parameters.  
Modified images are cached after the initial request and served up thereafter to help reduce server strain.

## Compatibility

Imagefly currently works with Laravel 5.x

Installation
------------

Install using composer:

```bash
composer require ivliev/imagefly
```

Add the service provider in `app/config/app.php`:

```php
Ivliev\Imagefly\ImageflyServiceProvider::class,
```

And add the Imagefly alias to `app/config/app.php`:

```php
'Imagefly' => Ivliev\Imagefly\Facades\Imagefly::class,
```

Configuration
-------------

The default config file is located in `vendor/ivliev/imagefly/src/config/imagefly.php`  
You should copy this file to `/config/imagefly.php` or using artisan:

```php
php artisan vendor:publish
```

and make changes there, in keeping with the cascading filesystem.

## Configuration Options

**cache_expire:** 604800  
Number of seconds before the browser checks the server for a new version of the modified image.

**cache_dir:** 'cache/'  
Path to the image cache directory you would like to use, don't forget the trailing slash!

**mimic_source_dir:** TRUE  
Mimic the source file folder structure within the cache directory.  
Useful if you want to keep track of cached files and folders to perhaps periodically clear some cache folders but not others.

**quality:** 80  
The default quality of images when not specified in the URL.

**scale_up:** FALSE  
If the image should be scaled up beyond it's original dimensions on resize.

**enforce_presets:** FALSE  
Will only allow param configurations set in the `presets`  
Best enabled on production sites to reduce spamming of different sized images on the server.

**presets**  
Imagefly params that are allowed when `enforce_presets` is set to `TRUE`  
Any other param configuration will throw a 404 error.
    
    // Example presets
    'presets' => array(
        'w320-h240-c',
        'w640-w480-q60'
    )
    
## Usage Examples

Here are some examples of what you can do with Imagefly.

**Resize to exactly 100px width and height cropping from the center**  
`<img src="/imagefly/w100-c/path/to/image.jpg">`  **OR**  `<img src="/imagefly/h100-c/path/to/image.jpg">`

**Resize to exactly 100px width and 150px height cropping from the center**  
`<img src="/imagefly/w100-h150-c/path/to/image.jpg">`

**Resize proportionally until width is 100 pixels**  
`<img src="/imagefly/w100/path/to/image.jpg">`

**Resize proportionally until height is 100 pixels**  
`<img src="/imagefly/h100/path/to/image.jpg">`

**Resize proportionally until either the width or height is 100 pixels, whichever comes first**  
`<img src="/imagefly/w100-h100/path/to/image.jpg">`

**Resize proportionally until height is 100 pixels with JPEG quality set to 60**  
`<img src="/imagefly/h100-q60/path/to/image.jpg">`
