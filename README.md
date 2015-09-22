# Equalable
Interface to implement custom equality for classes instead of relying on PHP’s comparison operators that might not
 determine the equality of an instance correctly.
 
Provided is the interface itself that establishes the contract that implementing classes have to have the equals method.
 As well as a dummy class that can be used in tests as a substitute for doubles, stubs, or mocks.

## Installation
Open a terminal, enter your project directory and execute the following command to add this package to your
 dependencies:

```bash
$ composer require fleshgrinder/equalable
```

This command requires you to have Composer installed globally, as explained in the
 [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

## Usage
Simply implement the interface and the required `equals` method.

```php
class YourClass implements Equalable {

    /**
     * @inheritDoc
     */
    public function equals($value) {
        if (is_object($value)) {
            return $value instanceof $this && $value === $this->value;
        }
        
        return $value === $this->value;
    }

}
```

## License
[![MIT License](https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/License_icon-mit.svg/48px-License_icon-mit.svg.png)](https://opensource.org/licenses/MIT)
