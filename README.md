# PHPass

A delicately modified port of the original [PHPass](http://openwall.org/phpass) hashing framework,
made Composer-friendly.

## Installation

```
composer install friartuck6000/phpass
```

## Usage

```php
use Phpass\PasswordHash;

$hasher = new PasswordHash(8, false);

// Generate a hash
$hash = $hasher->HashPassword('abc12345');

// Check a hash
if (!$hasher->CheckPassword('abc12345', $hash)) {
    die('Incorrect password!');
}
```
