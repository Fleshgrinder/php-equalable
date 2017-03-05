[![Latest Stable Version](https://poser.pugx.org/fleshgrinder/equalable/v/stable)](https://packagist.org/packages/fleshgrinder/equalable)
[![License](https://poser.pugx.org/fleshgrinder/equalable/license)](https://packagist.org/packages/fleshgrinder/equalable)
[![Total Downloads](https://poser.pugx.org/fleshgrinder/equalable/downloads)](https://packagist.org/packages/fleshgrinder/equalable)
# Equalable
The **equalable** library provides a single interface that defines a method
 that implementing classes can use to provide custom equality determination.
 This is useful for value objects and entities alike, since the former might
 want to allow equality checks against scalar types, and the latter need to
 exclude all encapsulated values from the equality determination which are not
 part of their identity defining values.

- [Installation](#installation)
- [Usage](#usage)
- [Testing](#testing)

## Installation
Open a terminal, enter your project directory and execute the following command
 to add this package to your dependencies:

```bash
composer require fleshgrinder/equalable
```

This command requires you to have Composer installed globally, as explained in
 the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
 Composer documentation.

## Usage
Simply implement the interface and the required `equals` method. The actual
 implementation of the method’s body depends on the use-case. Value objects
 for instance might want to allow equality checks against scalar types, e.g.:

```php
final class UserId implements Equalable {
	private $uid;

	// ...

	public function equals($other): bool {
		if ($other instanceof $this) {
			$other = $other->uid;
		}

		return \is_int($other) && $this->uid === $other;
	}
}
```

Entities on the other hand want to exclude all encapsulated values which are
 not part of their identity defining values from the determination, e.g.:

```php
final class User implements Equalable {
	private $uid;
	private $name;
	private $email;

	// ...

	public function equals($other): bool {
		return $other instanceof $this && $this->uid->equals($other->uid);
	}
}
```

## Testing
There are not tests since this library provides a single interface, which
 obviously has no implementation.
