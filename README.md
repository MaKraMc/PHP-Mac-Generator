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
## Basic usage
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
## Delimeters
You can change the delimeter by using the parameter when calling the function. By default the delimeter is a colon (":") See some examples below.
```php
randomMac();
randomMac(" ");
randomMac("-");
randomMac(".");
randomMac("");
```
would result in
> 57:17:37:3B:59:40
> 
> 27 B3 07 00 EA 9F
> 
> 41-75-FE-74-B3-F6
> 
> E6.CF.57.CF.5B.AB
> 
> 77A2FB10AABD
# Conclusion
As you can see, it's very simple.
If you have any questions, feel free to contact me :)
