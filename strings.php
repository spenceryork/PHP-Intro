<?php
$name = 'Spencer';
$string_one = "Learning to display \"hello $name\" to the screen.\n";
$string_one = 'Learning to display "Hello ' . $name . '!" to the screen.' . "\n";

// echo $string_one;

$isReady = true;
$isReady = false;
// var_dump($isReady);

var_dump(1 + "2");

$a = 10;
$b = "10";

var_dump($a == $b);
var_dump($a === $b);

if( $a === $b ) {
    echo 'The values match';
} else {
    echo 'The values do not match';
}


?>