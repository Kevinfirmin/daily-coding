<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 15/02/2017
 * Time: 17:52
 */

function doSomething(){
    echo "Something";
}
doSomething();
doSomething(); // Call it again

// Print out twice to the screen

function doSomethingWith($name) {
    echo "Hello" . $name;
}

doSomethingWith("Kevin");
$myname = "Firmin";
doSomethingWith($myname);

// Hello Kevin
//Hello Firmin

function doSomethingAndReturn($name) {
    return "Hello" . $name;
}

doSomethingAndReturn("Kevin");

// Does not echo

$result = doSomethingAndReturn("Kevin");
echo $result;

?>
