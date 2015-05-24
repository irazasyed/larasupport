Larasupport Package
====================

[![Package for Lumen](https://img.shields.io/badge/Package%20for%20-Lumen-blue.svg?style=flat-square)](https://github.com/irazasyed/larasupport)
[![Latest Version](https://img.shields.io/github/release/irazasyed/larasupport.svg?style=flat-square)](https://github.com/irazasyed/larasupport/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/irazasyed/larasupport.svg?style=flat-square)](https://packagist.org/packages/irazasyed/larasupport)


> Laravel Support for Lumen: Adds missing helpers that are not being made to the core of Lumen. Lets you use Laravel Packages in Lumen.
>
> There are some helper functions that are available in core of Laravel framework which are being used in Laravel Packages. Now because of these helpers missing in core of the Lumen, You won't be able to use those amazing Laravel Packages.
>
> I had submited PRs as well as created issue tickets in Lumen to add these helpers to the core but it got rejected with a reason to use Laravel instead. Just for Packages support i didn't want to use full-stack framework. There were few discussions about the same as well. Hence, This package to deal with this issue!

## Quick Start


### Installation

#### Install Through Composer

You can either add the package directly by firing this command

```
$ composer require irazasyed/larasupport:~1.0
```
	
Or add in the `require` key of `composer.json` file manually

```
"irazasyed/larasupport": "~1.0"
```

And Run the Composer update command

```
$ composer update
```

And you're done! You can now start installing any Laravel Package out there.

## Available Methods
> These helpers can be used across your Lumen project, not only with Laravel Packages.

#### public_path
Get the fully qualified path to the `public` directory. You can set env variable `PUBLIC_PATH` and it'll return the same instead of the default `public`.

#### config_path
Get the fully qualified path to the `config` directory (Mostly used with Laravel Packages).

#### database_path
Get the fully qualified path to the `database` directory (Mostly used with Laravel Packages).

#### route_parameter
```php
route_parameter($name, $default = null)
```
Get a given parameter from the route.

## Contributions

PRs are Welcome :)

## Additional information


Any issues, please [report here](https://github.com/irazasyed/larasupport/issues).

## License

[MIT](LICENSE) © [Syed Irfaq R.](http://lk.gd/irazasyed)