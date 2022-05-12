# PHP-MAC-adress-generator
Have you ever wanted to generate MAC-adresses in PHP?
This is a very simple script that I thought someone might find useful.

# Installation
Download the file "randomMac.php" or the whole repository and include the file into your project. You can do so by using:
```php
include "randomMac.php";
```
or
```php
require "randomMac.php";
```
Alternatively you can copy the whole code into your script where you need it.
# Usage
To get your random MAC-adress, just call the function like this:
```php
randomMac():
```
In most cases you probaply would like to output your freshly generated MAC-adress or modify it further.
You can output the MAC-adress using echo:
```php
echo randomMac();
```
Or assign it to a variable:
```php
$foo = randomMac():
```
# Conclusion
As you can see, it's very simple.
If you have any questions, feel free to contact me :)
