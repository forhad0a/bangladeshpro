# Facades

Facades is a library for a facade pattern. You can use own facades like Laravel Facades.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "ahir/facades": "1.*",
    }
}
```

## Usage

```php 
use Ahir\Facades\Facade;

class Alert extends Facade {

    /**
     * Get the connector name of main class
     *
     * @return string
     */
    public static function getFacadeAccessor() 
    { 
        return 'Acme\Libraries\Alert';
    }

}
```

```php
Alert::sample();
```

## License

MIT

