# Utilities

[![Latest Version on Packagist](https://img.shields.io/packagist/v/geeksareforlife/utilities.svg?style=flat)](https://packagist.org/packages/geeksareforlife/utilities)
![Tests](https://github.com/geeksareforlife/utilities/workflows/Tests/badge.svg)
![Analysis](https://github.com/geeksareforlife/utilities/workflows/Analysis/badge.svg)
![Code Sniffer](https://github.com/geeksareforlife/utilities/workflows/Code%20Sniffer/badge.svg)
[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](CODE_OF_CONDUCT.md)

This small package is simply a collection of functions that I find useful across multiple projects.

## Installation

Install using [Composer](https://getcomposer.org/):

```
composer require geeksareforlife/utilities
```

The only requirement at this time is PHP 7.1 and above.

## Usage

The package provides static functions grouped into classes. See the list of functions below.

When using, you can either call the functions using the fully qualified name:

```
$newArray = GeeksAreForLife\Utilities\Arrays::sanitiseArray($array, $keys);
```

or have a use statement at the top of your file:

```
use GeeksAreForLife\Utilities\Arrays;
...
$newArray = Arrays::sanitiseArray($array, $keys);
```

### Arrays::sanitiseArray($array, $keys)

This function takes two arguments - the array you want to sanitise and a list of keys you want
in the returned array.

### Arrays::sanitiseArrayList($list, $keys)

This function takes the provided list of arrays and sanitises each one before returning a list
of the sanitised arrays.

### Strings::startsWith($string, $startsWith)

This function checks if the provided `$string` starts with `$startsWith` and returns either `true` or `false`.

`$startsWith` can be of any length. An empty string in `$startsWith` will return `true`.

### Strings::endsWith($string, $endsWith)

This function checks if the provided `$string` ends with `$endsWith` and returns either `true` or `false`

`$endsWith` can be of any length. An empty string in `$endsWith` will return `true`.

## Contributing

Firstly, I am really happy that you are thinking about contributing to this project.

You can find the [Contributing Guidelines](CONTRIBUTING.md) in the root of this repository.

Please note that this project is released with a [Contributor Code of Conduct](CODE_OF_CONDUCT.md). By participating in this project you agree to abide by its terms.

### Filing a Bug or Requesting a feature

Both of these are contributing too! You can find details on how to do both in the [Contributing Guidelines](CONTRIBUTING.md).