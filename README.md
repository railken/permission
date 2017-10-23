# Permission

A very simple system to handle permissions

## Requirements

PHP 7.0.0 or later.

## Composer

You can install it via [Composer](https://getcomposer.org/) by typing the following command:

```bash
composer require railken/permission
```

## Usage

Add the trait, check [here](https://github.com/railken/permission/blob/master/src/Traits/CanTrait.php for more info.

```php
use Railken\Permission\Traits\CanTrait;

class User
{
	use CanTrait;
}

```

Load all permissions using `setPermissions`
```php

$user->setPermissions([
	'me.*',
	'all.show',
]);
```
Note: You can use `*` as a wildcard.


Now you're free to test the permission of user

```php

$user->can('me.anything'); 		// true
$user->can('foo'); 				// false
$user->can('all.wrong'); 		// false
$user->can('all.show'); 		// true
$user->can('all.show.wrong'); 	// false
```

Check [tests](https://github.com/railken/permission/blob/master/tests/PermissionTest.php) to see more examples;

## License

Open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).