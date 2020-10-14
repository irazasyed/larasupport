[![Larasupport][img-hero]][link-repo]

[![Join PHP Chat][ico-phpchat]][link-phpchat]
[![Chat on Telegram][ico-telegram]][link-telegram]
[![Package for Lumen][ico-package]][link-repo]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Total Downloads][ico-downloads]][link-downloads]

# Larasupport Package

> **Laravel Package Support for Lumen:** Makes Lumen compatible with Laravel Packages. You can use any Laravel Packages in Lumen by installing **Larasupport** Package.
>
> Laravel Packages make use of various global helpers that are not available in Lumen core by default which prevents us from using any Laravel Package in Lumen.
>
> This package adds the missing pieces to make Lumen compatible along with the support for `vendor:publish` artisan command and other features.  

## Quick Start

### Install

You can add the package directly by firing this command

```bash
$ composer require irazasyed/larasupport
```

#### Add Service Provider

Add this service provider to your `bootstrap/app.php` file.

``` php
$app->register(Irazasyed\Larasupport\Providers\ArtisanServiceProvider::class);
```

Artisan Service Provider is an optional provider required only if you want `vendor:publish` command working.

And you're done! You can now start installing any Laravel Package out there :)

## Available Methods

> These helpers can be used across your Lumen project, not only with Laravel Packages.

### Paths

#### app_path

Get the fully qualified path to the `app` directory.

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

## Contributing

Thank you for considering contributing to the project. Please read [the contributing guide][link-contributing] before creating an issue or sending in a pull request.

## Code of Conduct

Please read our [Code of Conduct][link-code-of-conduct] before contributing or engaging in discussions.

## Security

If you discover a security vulnerability within this project, please email Syed at `syed at lukonet.com`. All security vulnerabilities will be promptly addressed. You may view our full security policy [here][link-security-policy].

## Additional information

Any issues, please [report here][link-issues]

## Credits

- [Irfaq Syed][link-author]
- [All Contributors][link-contributors]

## License

The Laravel framework is open-sourced software licensed under the MIT license. Larasupport consists almost entirely of Laravel source code, so maintains the same license. Please see [License File][link-license] for more information.

[ico-phpchat]: https://img.shields.io/badge/Slack-PHP%20Chat-5c6aaa.svg?style=flat-square&logo=slack&labelColor=4A154B
[ico-telegram]: https://img.shields.io/badge/@PHPChatCo-2CA5E0.svg?style=flat-square&logo=telegram&label=Telegram
[ico-version]: https://img.shields.io/packagist/v/irazasyed/larasupport.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/irazasyed/larasupport.svg?style=flat-square
[ico-package]: https://img.shields.io/badge/Package%20for%20-Lumen-blue.svg?style=flat-square
[img-hero]: https://user-images.githubusercontent.com/1915268/94963485-d91de800-0515-11eb-9780-3fac58d701a6.jpg

[link-phpchat]: https://phpchat.co/?ref=larasupport
[link-telegram]: https://t.me/PHPChatCo
[link-author]: https://github.com/irazasyed
[link-repo]: https://github.com/irazasyed/larasupport
[link-license]: https://github.com/irazasyed/larasupport/blob/master/LICENSE.md
[link-issues]: https://github.com/irazasyed/larasupport/issues
[link-contributors]: https://github.com/irazasyed/larasupport/contributors
[link-packagist]: https://packagist.org/packages/irazasyed/larasupport
[link-downloads]: https://packagist.org/packages/irazasyed/larasupport/stats
[link-contributing]: https://github.com/irazasyed/larasupport/blob/master/.github/CONTRIBUTING.md
[link-code-of-conduct]: https://github.com/irazasyed/larasupport/blob/master/.github/CODE_OF_CONDUCT.md
[link-security-policy]: https://github.com/irazasyed/larasupport/security/policy

[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Firazasyed%2Flarasupport.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Firazasyed%2Flarasupport?ref=badge_large)
