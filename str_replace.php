<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 25/01/2017
 * Time: 17:13
 */

$strings = array(
    "Hello world",
    "Goodbye world",
);

$search = array(
    "Hello",
    "Goodbye",
);

$replace = array(
    "Bonjour",
    "Hola",
);

$replace = str_replace(
    $search, $replace, $strings
);

print_r( $replace);

?>