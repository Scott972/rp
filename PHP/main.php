<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */


require_once('constants.php');

/**Declare an array using constants for the keys**/
$array = [
    A_STING_CONSTANT => ONE,
    ANOTHER_STRING_CONSTANT => TWO,
    FINAL_STRING_CONSTANT => THREE
];
/** No need to explicitly declare variable as int type in PHP**/
$result = $array[A_STING_CONSTANT] * $array[ANOTHER_STRING_CONSTANT];


/** without concatenating string */
echo "The result of {$array[A_STING_CONSTANT]} * {$array[ANOTHER_STRING_CONSTANT]} is $result";
/** with string concatenating */
echo 'The result of '.$array[A_STING_CONSTANT].' * '.$array[ANOTHER_STRING_CONSTANT].' is '.$result.'';

/** @var  $multi_line_string  */
$multi_line_string = <<<EOD
This is a multiple line string using PHP's EOD HERDOC method. Let's review a bit of what we've done: 
We've gotten the product of $result by multiplying {$array[A_STING_CONSTANT]} and {$array[ANOTHER_STRING_CONSTANT]}. 
We have also declared an array  that contains the values {$array[A_STING_CONSTANT]}, {$array[ANOTHER_STRING_CONSTANT]}, and {$array[FINAL_STRING_CONSTANT]}. 
EOD;
