<?php namespace Group;
/**
 * This file is part of the Nocriz API (http://nocriz.com)
 *
 * Copyright (c) 2013  Nocriz API (http://nocriz.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

/**
 * Group Library find group of characters in a string.
 *
 * @package  Math
 * @author   Ramon Barros <contato@ramon-barros.com>
 */

class Group {
    private $string;

    public function __construct($num=null) {
        $this->string = (string)$num;
    }
}