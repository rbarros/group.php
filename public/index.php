<?php
/**
 * This file is part of the Nocriz API (http://nocriz.com)
 *
 * Copyright (c) 2013  Nocriz API (http://nocriz.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

/**
 * Nocriz API 
 *
 * @package  Nocriz
 * @author   Ramon Barros <contato@ramon-barros.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| This application is installed by the Composer, 
| that provides a class loader automatically.
| Use it to seamlessly and feel free to relax.
|
*/

require __DIR__.'/../app/bootstrap.php';

use Group\Group;

echo "<pre>";
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
echo "</pre>";