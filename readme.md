
![Laravel Hashnode](https://github.com/dcblogdev/laravel-hashnode/assets/1018170/e52fb7f5-8996-4501-9f60-080bae96b9aa)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dcblogdev/laravel-hashnode.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-hashnode)
[![Total Downloads](https://img.shields.io/packagist/dt/dcblogdev/laravel-hashnode.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-hashnode)

Laravel package for working with the Hashnode API

Hashnode API documentation can be found at:
https://apidocs.hashnode.com/

# Install

You can install the package via composer:

```
composer require dcblogdev/laravel-hashnode
```

# Config

You can publish the config file with:

```
php artisan vendor:publish --provider="Dcblogdev\Hashnode\HashnodeServiceProvider" --tag="config"
```

# .ENV Configuration

Ensure you've set the following in your .env file:

```
HASHNODE_HOST=
HASHNODE_PER_PAGE=9
```

The host is either a domain when using headless or the hashnode subdomain.


# Usage

## Get Publication

```php
Hashnode::publication()
```

## Get Posts

```php
Hashnode::posts()
```

## Get Post

```php
Hashnode::post($slug)
```

## Get Posts by Tag

```php
Hashnode::postByTag($slug)
```

## Get Posts by search term

```php
Hashnode::searchPosts($term)
```

## Get Pages

```php
Hashnode::pages()
```

## Get Page

```php
Hashnode::page($slug)
```

## Community

There is a Discord community. https://discord.gg/VYau8hgwrm For quick help, ask questions in the appropriate channel.

## Contributing

Contributions are welcome and will be fully credited.

Contributions are accepted via Pull Requests on [Github][4].

## Pull Requests

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0][5]. Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## Security

If you discover any security related issues, please email dave@dcblog.dev email instead of using the issue tracker.

## License

license. Please see the [license file][6] for more information.

[4]:    https://github.com/dcblogdev/laravel-hashnode
[5]:    http://semver.org/
[6]:    license.md
