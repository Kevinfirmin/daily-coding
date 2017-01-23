<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 23/01/2017
 * Time: 17:10
 */
echo "<h1>All colors</h1>";
$colors = array("red", "green", "blue", "orange");
foreach ($colors as $color) {

    echo $color . "<br>";
}
echo "<h1>Random color</h1>";
echo $colors[rand(0,count($colors) - 1)];
?>