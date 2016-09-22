<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */


define('A_STING_CONSTANT', 'This is a string');
define('ANOTHER_STRING_CONSTANT', 'This is a another string constant');
define('FINAL_STRING_CONSTANT', 'This is the final string constant');

$alphas = array('ONE', 'TWO', 'THREE', 'FOUR', 'FIVE');
$i=1;
foreach($alphas as $alpha){
    define($alpha, $i);
    $i++;
}