Larasupport Package
====================

[![Join the PHP Chat community][ico-phpchat]][link-phpchat]
[![Package for Lumen][ico-package]][link-repo]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Total Downloads][ico-downloads]][link-downloads]

> Laravel Support for Lumen: Adds missing helpers that are not being made to the core of Lumen. Lets you use Laravel Packages in Lumen.
>
> There are some helper functions that are available in core of Laravel framework which are being used in Laravel Packages. Now because of these helpers missing in core of the Lumen, You won't be able to use those amazing Laravel Packages.
>
> I had submited PRs as well as created issue tickets in Lumen to add these helpers to the core but it got rejected with a reason to use Laravel instead. Just for Packages support i didn't want to use full-stack framework. There were few discussions about the same as well. Hence, This package to deal with this issue!

## Quick Start


### Install

#### Install Through Composer

You can either add the package directly by firing this command

``` bash
$ composer require irazasyed/larasupport:~1.0
```
    
Or add in the `require` key of `composer.json` file manually

``` json
"irazasyed/larasupport": "~1.0"
```

And Run the Composer update command

``` bash
$ composer update
```

#### Add Service Provider

Add this service provider to your `bootstrap/app.php` file.

``` php
$app->register(Irazasyed\Larasupport\Providers\ArtisanServiceProvider::class);
```
Artisan Service Provider is an optional provider required only if you want `vendor:publish` command working.

And you're done! You can now start installing any Laravel Package out there.

## Available Methods
> These helpers can be used across your Lumen project, not only with Laravel Packages.

### Paths

#### public_path
Get the fully qualified path to the `public` directory. You can set env variable `PUBLIC_PATH` and it'll return the same instead of the default `public`.

#### config_path
Get the fully qualified path to the `config` directory (Mostly used with Laravel Packages).

#### database_path
Get the fully qualified path to the `database` directory (Mostly used with Laravel Packages).

### Artisan

#### vendor:publish
Artisan command to Publish any publishable assets from vendor packages (Required to get Laravel Packages working!).

``` bash
php artisan vendor:publish
```
OR

``` bash
php artisan vendor:publish --provider="Vendor\Providers\PackageServiceProvider" 
```

### Other

#### route_parameter

``` php
route_parameter($name, $default = null)
```
Get a given parameter from the route.

#### elixir

If you're using Laravel Elixir in Lumen, Then this helper function will come handy when you want to include assets from your build directory. By default, it assumes your Elixir's build directory is `build` under public directory (The default is as per the Elixir's default config). If you use a custom build directory, then you can simply set env variable `ELIXIR_BUILD_PATH` with your custom directory path and it'll use the same instead of the default.

``` html
<link rel="stylesheet" href="{{ elixir('css/all.css') }}">

<script src="{{ elixir('js/app.js') }}"></script>
```

## Contributions

PRs are Welcome :)

## Additional information

Any issues, please [report here][link-issues]

## Credits

- [Syed Irfaq R.][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[ico-phpchat]: https://img.shields.io/badge/Join-PHP%20Chat-blue.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/irazasyed/larasupport.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/irazasyed/larasupport.svg?style=flat-square
[ico-package]: https://img.shields.io/badge/Package%20for%20-Lumen-blue.svg?style=flat-square

[link-phpchat]: https://phpchat.co/?ref=larasupport
[link-author]: https://github.com/irazasyed
[link-repo]: https://github.com/irazasyed/larasupport
[link-license]: https://github.com/irazasyed/larasupport/blob/master/LICENSE.md
[link-issues]: https://github.com/irazasyed/larasupport/issues
[link-contributors]: https://github.com/irazasyed/larasupport/contributors
[link-packagist]: https://packagist.org/packages/irazasyed/larasupport
[link-downloads]: https://packagist.org/packages/irazasyed/larasupport/stats
