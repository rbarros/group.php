# group.php

### Group

Você pode instalar com Composer (recomendado) ou manualmente.

```
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install --prefer-source
```

## Examples

```
require __DIR__.'/../app/bootstrap.php';

use Group\Group;

 $group = new Group("012345679");
 echo print_r($group->getGroups(), true);
 /*
    Array
    (
        [0] => 012345679
    )
  */
  
 $group = new Group("666666666");
 echo print_r($group->getGroups(), true);
 /*
    Array
    (
        [0] => 666666666
    )
  */
  
 $group = new Group("166666666");
 echo print_r($group->getGroups(), true);
 /*
    Array
    (
        [0] => 1
        [1] => 66666666
    )
  */
  
 $group = new Group("025323232");
 echo print_r($group->getGroups(), true);
 /*
    Array
    (
        [0] => 025
        [1] => 323232
    )
  */
  
 $group = new Group("125252525");
 echo print_r($group->getGroups(), true);
 /*
    Array
    (
        [0] => 1
        [1] => 25252525
    )
  */
  
 $group = new Group("aaabbb");
 echo print_r($group->getGroups(), true);
 /*
    Array
    (
        [0] => aaa
        [1] => bbb
    )
  */
```

### Tests

Tests sem Coverage
```
$ bin/phpunit --configuration phpunit.xml
```

Tests com coverage
```
# Requer extensão Xdebug.
$ bin/phpunit --configuration phpunit.xml.dist
```