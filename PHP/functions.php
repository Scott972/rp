<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */

/**
 * @param $x
 * @param $y
 *
 * adds
 */
function add($x, $y){
    print $x+$y;
}

/**
 * @param $x
 * @param $y
 *
 * subtracts
 */
function subtract($x, $y){
    print $x-$y;

}

/**
 * @param $x
 * @param $y
 *
 * multiplies
 */
function multiply($x, $y){
    print $x*$y;

}

/**
 * @param $x
 * @param $y
 *
 * divides variable passed by reference
 */
function divide($x, &$y){
    print $x/$y;
}

add(1,2);
subtract(2,3);
multiply(3,12);

$denom = 14;
divide(33, $denom); //$denom's value is now 33/14


/**
 * @param $first
 * @param $second
 * @param bool $strict_type
 *
 *
 */
function comparison($first, $second, $strict_type = false){
    if(!$strict_type){
        if($first == $second){
            print 'Equal.';
        }else{
            print 'Not Equal';
        }
    }else{
        if($first === $second){
            print 'Equal';
        }else{
            print 'Not Equal';
        }
    }
}