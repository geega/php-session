# php-session

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Geega``` ```geega``` ```https://github.com/geega``` ```varpihovsky@gmail.com``` ```geega``` ```php-session``` ```Simple PHP session wrapper``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require geega/php-session
```

## Usage

``` php
Session::start();

// Check exists?

Session::has($key);

// Get value by key

Session::get($key);

// Set value by key

Session::set($key, $value);







```


## TODO

- remove
- Implements ArrayAccess, Countable, IteratorAggregate interfaces
- Session object model
- Write tests