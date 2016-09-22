<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 *
 *
 */

include('math.php');
$math = new Math();

/***I'm unsure about the instructions here ( calling each function three times)*/

while($i < 3) {
    $math->add(1, 2, 3, 4, 5);
    $math->subtract(5, 4, 3, 2, 1);
    $math->multiply(1, 2);
    $math->divide(4, 3);
    $i++;
};
